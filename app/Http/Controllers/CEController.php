<?php

namespace App\Http\Controllers;



use App\Models\Student;
use App\Models\Team;

use EtuUTT;
use Request;
use Redirect;
use Config;
use View;

class CEController extends Controller
{
    /**
     * Set student as CE and redirect to dashboard index
     *
     * @return Response
     */
    public function firstTime()
    {
        $student = EtuUTT::student();
        $student->ce = true;
        $student->save();

        return redirect(route('dashboard.index'));
    }

    /**
     * List all the teams and show a creation form.
     *
     * @return Response
     */
    public function teamList()
    {
        if (!EtuUTT::student()->ce)
        {
            return $this->error('Vous n\'avez pas le droit d\'accéder à cette page.');
        }

        return View::make('dashboard.ce.teamlist', [
            'teams' => Team::all()
        ]);
    }

    /**
     * List all the teams and show a creation form.
     *
     * @return Response
     */
    public function teamCreate()
    {
        if (!EtuUTT::student()->ce || EtuUTT::student()->team)
        {
            return $this->error('Vous n\'avez pas le droit d\'accéder à cette page.');
        }

        $this->validate(Request::instance(), [
            'name' => 'required|min:3|max:30|unique:teams'
        ],
        [
            'name.unique' => 'Ce nom d\'équipe est déjà pris.'
        ]);

        // Create team
        $data = Request::only(['name']);
        $team = Team::create($data);
        $team->respo_id = EtuUTT::student()->student_id;
        if ($team->save()) {
            // Put user in the team
            $student = EtuUTT::student();
            $student->ce = true;
            $student->team_id = $team->id;
            $student->team_accepted = true;
            if($student->save()) {
                return redirect(route('dashboard.ce.myteam'))->withSuccess('L\'équipe a été créé !');
            }
        }
        return $this->error('Impossible d\'ajouter l\'équipe !');
    }

    /**
     * SHow student's team and form to edit it.
     *
     * @return Response
     */
    public function myTeam()
    {
        $now =  new \DateTime();
        $ceFakeDeadline = (new \DateTime(Config::get('services.ce.fakeDeadline')))->diff($now);

        if (!EtuUTT::student()->ce || !EtuUTT::student()->team)
        {
            return $this->error('Vous n\'avez pas le droit d\'accéder à cette page.');
        }

        return View::make('dashboard.ce.myteam', [
            'team' => EtuUTT::student()->team,
            'student' => EtuUTT::student(),
            'ceDeadline' => [
                'days' => (($ceFakeDeadline->invert)?'':'-'). $ceFakeDeadline->days,
                'hours' => $ceFakeDeadline->h,
                'minutes' => $ceFakeDeadline->i,
            ]
        ]);
    }

    /**
     * Submit team information form
     *
     * @return Response
     */
    public function myTeamSubmit()
    {
        if (!EtuUTT::student()->ce || !EtuUTT::student()->team
            || EtuUTT::student()->student_id != EtuUTT::student()->team->respo_id)
        {
            return $this->error('Vous n\'avez pas le droit d\'accéder à cette page.');
        }

        $team = EtuUTT::student()->team;
        $data = Request::only(['name', 'description', 'img']);
        $this->validate(Request::instance(), [
            'name' => 'required|min:3|max:30|unique:teams,name,'.EtuUTT::student()->team->id,
            'description' => 'min:100|max:300',
            'img' => 'image'
        ],
        [
            'name.unique' => 'Ce nom d\'équipe est déjà pris.'
        ]);

        // Check image size
        $extension = null;
        if(isset($_FILES['img']) && !empty($_FILES['img']['name'])) {
            $size = getimagesize($_FILES['img']['tmp_name']);
            if($size[0] == 200 && $size[1] == 200) {
                $extension = pathinfo($_FILES['img']['name'], PATHINFO_EXTENSION);
                move_uploaded_file($_FILES['img']['tmp_name'], public_path() . '/uploads/teams-logo/' . $team->id . '.' . $extension);
            }
        }

        // Update team informations
        $team->name = $data['name'];
        $team->description = $data['description'];
        if($extension) {
            $team->img = $extension;
        }

        $team->save();

        return redirect(route('dashboard.ce.myteam'))->withSuccess('Vos modifications ont été sauvegardées.');
    }

    /**
     * Search for a student to add it to my teaALAPIGMÉS,,,ALAPIGMÉSALAPIGMÉSALAPIGMÉSALAPIGMÉSm
     *
     * @return Response
     */
    public function add()
    {
        if (!EtuUTT::student()->ce || !EtuUTT::student()->team
            || EtuUTT::student()->student_id != EtuUTT::student()->team->respo_id
            || EtuUTT::student()->team->ce->count() >= 5)
        {
            return $this->error('Vous n\'avez pas le droit d\'accéder à cette page.');
        }

        // Search student on EtuUTT
        $data = Request::only(['search']);
        $usersAssoc = [];
        $search = '';
        if($data && !empty($data['search'])) {
            $search = $data['search'];
            $explode = explode(' ', $search, 5);
            $users = [];

            // Search every string as lastname and firstname
            foreach ($explode as $string) {
                if(!empty($string)) {
                	$data = EtuUTT::call('/api/public/users', [
                		'firstname' => $string
                	]);
                	if(isset($data['data'])) {
                		$users = array_merge($users, $data['data']);
                	}
                    elseif(isset($data['error'])) {
                        return redirect(route('oauth.auth'))->withError('Une erreur s\'est produite, veuillez réessayer.');
                    }

                	$data = EtuUTT::call('/api/public/users', [
                		'lastname' => $string
                	]);
                	if(isset($data['data'])) {
                		$users = array_merge($users, $data['data']);
                	}
                }
            }

            // Remove duplicata and put them at the beginning
            $usersAssoc = [];
            foreach ($users as $key => $value) {
                // put rel as key in the _link array
                $value['links'] = [];
                foreach ($value['_links'] as $link) {
                    $value['links'][$link['rel']] = $link['uri'];
                }
            	// If duplication
            	if(isset($usersAssoc[$value['login']])) {
            		// Remove every values
            		unset($usersAssoc[$value['login']]);
            		// Put it at the beginning
            		$usersAssoc = array_merge([$value['login'] => $value], $usersAssoc);
            	}
                // add it if student student remove it
            	else if($value['isStudent'] == 1) {
            		$usersAssoc[$value['login']] = $value;
            	}
            }

        }

        return View::make('dashboard.ce.add', [
            'search' => $search,
            'students' => $usersAssoc
        ]);
    }

    /**
     * When search form from add is submited
     *
     * @return Response
     */
    public function addSubmit($login)
    {
        if (!EtuUTT::student()->ce || !EtuUTT::student()->team
            || EtuUTT::student()->student_id != EtuUTT::student()->team->respo_id
            || EtuUTT::student()->team->ce->count() >= 5)
        {
            return $this->error('Vous n\'avez pas le droit d\'accéder à cette page.');
        }

        // If the user is new, import some values from the API response.
        $json = EtuUTT::call('/api/public/users/'.$login)['data'];
        $student = Student::find($json['studentId']);
        if ($student === null) {
            $student = new Student([
                'student_id'    => $json['studentId'],
                'first_name'    => $json['firstName'],
                'last_name'     => $json['lastName'],
                'surname'       => $json['surname'],
                'email'         => $json['email'],
                'facebook'      => $json['facebook'],
                'branch'        => $json['branch'],
                'level'         => $json['level'],
                'ce'            => 1,
                'team_id'       => EtuUTT::student()->team_id,
            ]);
            $student->save();

            $picture = file_get_contents('http://local-sig.utt.fr/Pub/trombi/individu/' . $json['studentId'] . '.jpg');
			file_put_contents(public_path() . '/uploads/students-trombi/' . $json['studentId'] . '.jpg', $picture);
        }
        else if($student->team) {
            return $this->error('Cet étudiant fait déjà partie d\'une équipe. Il faut qu\'il la quitte avant de pouvoir être ajouté à une nouvelle équipe.');
        }
        else {
            $student->team_id = EtuUTT::student()->team_id;
            $student->ce = 1;
            $student->save();
        }

        return redirect(route('dashboard.ce.myteam'))->withSuccess($json['fullName'].' a bien été ajouté à votre équipe. Il faut maintenant qu\'il se connecte au site d\'intégration pour valider sa participation.');
    }


    /**
     * Accept team invitation
     *
     * @return Response
     */
    public function join()
    {
        if (!EtuUTT::student()->ce || !EtuUTT::student()->team)
        {
            return $this->error('Vous n\'avez pas le droit d\'accéder à cette page.');
        }

        $student = EtuUTT::student();
        $student->team_accepted = true;
        $student->save();

        return redirect(route('dashboard.ce.myteam'))->withSuccess('Vous avez rejoint l\'équipe !');
    }


    /**
     * Refuse team invitation or quit team
     *
     * @return Response
     */
    public function unjoin()
    {
        if (!EtuUTT::student()->ce || !EtuUTT::student()->team || EtuUTT::student()->student_id == EtuUTT::student()->team->respo_id)
        {
            return $this->error('Vous n\'avez pas le droit d\'accéder à cette page.');
        }

        $student = EtuUTT::student();
        $student->team_id = null;
        $student->save();

        return redirect(route('dashboard.index'))->withSuccess('Vous avez refusé de rejoindre l\'équipe !');
    }
}
