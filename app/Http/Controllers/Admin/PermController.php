<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\Imports\ImportPerms;
use Excel;
use App\Http\Controllers\Controller;
use App\Models\Perm;
use App\Models\PermType;
use App\Models\User;
use Redirect;
use Request;
use Response;
use Validator;
use Auth;
use DateTime;

class PermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perms = Perm::orderby('start')->get();
        return view('dashboard.perms.index', compact('perms'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function recap()
    {
        $users = User::has('perms')->get();
        return view('dashboard.perms.recap', compact('users'));
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function userperms($id)
    {
        $user = User::find($id);
        return view('dashboard.perms.userperms', compact('user'));
    }

    /**
     * Show the form for choosing a type
     *
     * @return \Illuminate\Http\Response
     */
    public function selectType()
    {
        $permTypes = PermType::all();
        return view('dashboard.perms.selectType', compact('permTypes'));
    }

    /**
     * Show the form for creating a new resource with the desired type.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $validator = Validator::make(Request::all(), ['permType' => 'exists:perm_types,id']);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $permType = PermType::find(Request::get('permType'));
        return view('dashboard.perms.create', compact('permType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        Request::flash();

        // validate the request inputs
        $validator = Validator::make(Request::all(), Perm::webStoreRules());
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $perm = new Perm();
        $perm->description = Request::get('description');
        $perm->start = $this->formatDate(Request::get('start_date'), Request::get('start_hour'));
        $perm->end = $this->formatDate(Request::get('end_date'), Request::get('end_hour'));
        if (Request::get('open_date') != '' && Request::get('open_hour') != '') {
            $perm->open = $this->formatDate(Request::get('open_date'), Request::get('open_hour'));
        }
        if (Request::get('pre_open_date') != '' && Request::get('pre_open_hour') != '') {
            $perm->pre_open = $this->formatDate(Request::get('pre_open_date'), Request::get('pre_open_hour'));
        }
        $perm->place = Request::get('place');
        $perm->nbr_permanenciers = Request::get('nbr_permanenciers');
        $perm->perm_type_id = Request::get('perm_type_id');
        $perm->save();
        $perm->respos()->attach(Request::get('users'), ['respo' => true]);
        return redirect()->route('perm.index');
    }

    private function formatDate($date, $hour)
    {
        $date = implode('-', array_reverse(explode('-', $date)));
        return strtotime($date . ' ' . $hour);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perm = Perm::find($id);
        return view('dashboard.perms.edit', compact('perm'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // validate the request inputs
        $validator = Validator::make(Request::all(), Perm::webUpdateRules($id));
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $perm = Perm::find($id);
        $perm->description = Request::get('description');
        $perm->start = $this->formatDate(Request::get('start_date'), Request::get('start_hour'));
        $perm->end = $this->formatDate(Request::get('end_date'), Request::get('end_hour'));
        $perm->place = Request::get('place');
        $perm->nbr_permanenciers = Request::get('nbr_permanenciers');
        if (Request::get('open_date') != '' && Request::get('open_hour') != '') {
            $perm->open = $this->formatDate(Request::get('open_date'), Request::get('open_hour'));
        }
        if (Request::get('pre_open_date') != '' && Request::get('pre_open_hour') != '') {
            $perm->pre_open = $this->formatDate(Request::get('pre_open_date'), Request::get('pre_open_hour'));
        }
        $perm->save();
        $perm->respos()->sync(Request::get('users'));

        return redirect()->route('perm.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Perm::destroy($id);
        return redirect()->route('perm.index');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function usersindex($id)
    {
        $perm = Perm::find($id);
        return view('dashboard.perms.usersindex', compact('perm'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function useradd($id)
    {
        $perm = Perm::find($id);
        return view('dashboard.perms.useradd', compact('perm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function userstore($id)
    {
        Request::flash();

        // validate the request inputs
        $validator = Validator::make(Request::all(), [
            'users' => 'array',
            'users.*' => 'exists:users,id',
        ]);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $perm = Perm::find($id);
        $perm->permanenciers()->attach(Request::get('users'), ['respo' => false]);
        return redirect()->route('perm.users', ['id' => $id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @param  int  $userid
     * @return \Illuminate\Http\Response
     */
    public function userdestroy($id, $userId)
    {
        $perm = Perm::find($id);
        $perm->permanenciers()->detach($userId);
        return redirect()->route('perm.users', ['id' => $id]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function userpresentform($id, $userId)
    {
        $perm = Perm::find($id);
        $user = User::find($userId);
        return view('dashboard.perms.userpresent', compact('perm', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function userabsentform($id, $userId)
    {
        $perm = Perm::find($id);
        $user = User::find($userId);
        return view('dashboard.perms.userabsent', compact('perm', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function userabsent($id, $userId)
    {
        // validate the request inputs
        $validator = Validator::make(Request::all(), ['absence_reason' => 'string', 'commentary' => 'string', 'pointsPenalty' => 'integer']);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $perm = Perm::find($id);
        $perm->permanenciers()->updateExistingPivot($userId, [
            'presence' => 'absent',
            'absence_reason' => Request::get('absence_reason'),
            'commentary' => Request::get('commentary'),
            'pointsPenalty' => Request::get('pointsPenalty') + $perm->type->points,
        ]);

        return redirect()->route('perm.users', ['id' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function userpresent($id, $userId)
    {
        // validate the request inputs
        $validator = Validator::make(Request::all(), ['commentary' => 'string', 'pointsPenalty' => 'integer']);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator);
        }
        $perm = Perm::find($id);
        $perm->permanenciers()->updateExistingPivot($userId, [
            'presence' => 'present',
            'absence_reason' => '',
            'commentary' => Request::get('commentary'),
            'pointsPenalty' => Request::get('pointsPenalty'),
        ]);

        return redirect()->route('perm.users', ['id' => $id]);
    }

    /**
     * Read an uploaded CSV file of PermTypes via the request and store them in the database.
     *
     * @return \Illuminate\Http\Response
     */
    public function import()
    {
        Validator::make(Request::all(), [
            'csv' => 'required|file|max:2048|mimetypes:text/plain,text/csv,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel',
        ])->validate();

        Excel::import(new ImportPerms, request()->file('csv'));
        return redirect()->route('perm.index');
    }

    public function shotgun() {
        $perms = Perm::orderby('start')->get();
        $user = Auth::user(); // user that make the request
        foreach ($perms as $perm) {
            $found = false;
            foreach ($perm->permanenciers as $permanencier) {
                if ($permanencier->id == $user->id) {
                    $found = true;
                    break;
                }
            }
            $perm->isAlreadyIn = $found;
            $open = new DateTime();
            $open->setTimestamp($perm->open);
            $perm->isOpen = $open < new \DateTime('now');
        }
        return view('dashboard.perms.shotgun', compact('perms'));
    }

    public function doShotgun($id) {
        $redirection = redirect(route('perm.shotgun'));
        $user = Auth::user();
        $perm = Perm::find($id);
        if ($user->is_newcomer) {
            return $redirection->withError('Tu ne peux pas rentrer dans une perm en tant que nouveau !');
        }
        if (!$user->admin) {
            if ($perm->open == null) {
                return $redirection->withError('Tu ne peux pas rejoindre cette perm, tu dois y être ajouté.');
            }
            // Cas d'une perm en préouverture
            $open = new DateTime();
            $open->setTimestamp($perm->open);
            $pre_open = new DateTime();
            $pre_open->setTimestamp($perm->pre_open);
            $start = new DateTime();
            $start->setTimestamp($perm->start);
            $now = new \DateTime('now');

            if ($open > $now) {
                return $redirection->withError("Cette perm n'est pas encore ouverte.");
            }

            //Rejoindre une heure avant max
            $diff = $start->diff($now);
            $diff_h = $diff->d * 24 + $diff->h;
            if($diff_h < 1 || $start < $now)
            {
                return $redirection->withError("Trop tard, tu ne peux pas rejoindre moins d'une heure avant le début de la perm.");
            }
        }
        foreach($perm->permanenciers as $permanencier) {
            if($permanencier->id == $user->id) {
                return $redirection->withError('Tu es déjà dans cette perm !');
            }
        }

        if($perm->nbr_permanenciers > $perm->permanenciers()->count()){
            $perm->permanenciers()->attach($user->id, ['respo' => false]);
            return $redirection->withSuccess('Tu as bien été ajouté à la perm !');
        } else {
            return $redirection->withError('Cette perm est complète !');
        }
    }

    public function doUnshotgun($id) {
        $redirection = redirect(route('perm.shotgun'));
        $user = Auth::user();
        $perm = Perm::find($id);
        $found = false;
        foreach($perm->permanenciers as $permanencier) {
            if($permanencier->id == $user->id) {
                $found = true;
                break;
            }
        }
        if (!$found) {
            return $redirection->withError("Tu n'es pas dans cette perm !");
        }
        //Test temps de leave
        $start = new DateTime();
        $start->setTimestamp($perm->start);
        $now = new \DateTime('now');

        $diff = $start->diff($now);
        $diff_h = $diff->d * 24 + $diff->h;
        if($diff_h < 48 || $start < $now) {
            return $redirection->withError('Trop tard, tu ne peux pas quitter une perm moins de 48 heure avant le début.');
        }
        $perm->permanenciers()->detach($user->id);
        return $redirection->withSuccess('Tu as bien quitté la perm.');
    }
}
