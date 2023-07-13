<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;
use App\Models\User;
use Config;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;

class ImportStudentPictures extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'integration:students:importPictures';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Import students pictures.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    private function getProfilePicture(User $student) {
        $client = new Client([
            'base_uri' => Config::get('services.etuutt.baseuri.api'),
            'auth' => [
                Config::get('services.etuutt.client.id'),
                Config::get('services.etuutt.client.secret')
            ]
        ]);

        try {
            $user = $client->get('/api/public/users/' . $student->etuutt_login . '?access_token=' . $student->etuutt_access_token);
            $userLinks = json_decode($user->getBody()->getContents(), true)['data']['_links'];
            $userAvatarUrl = null;
            foreach ($userLinks as $link) {
                if ($link['rel'] == 'user.image') {
                    $userAvatarUrl = $link['uri'];
                }
            }
            if (empty($userAvatarUrl)) {
                return null;
            }
            $response = $client->get($userAvatarUrl . '?access_token=' . $student->etuutt_access_token);
        } catch (\GuzzleHttp\Exception\ClientException $e) {
            if ($e->hasResponse()) {
                $json = json_decode($e->getResponse()->getBody()->getContents(), true);
                if ($json) {

                    // Catch token expiration
                    if (isset($json['error']) && $json['error'] == 'expired_token') {
                        // Refresh token
                        $params = [
                            'grant_type'         => 'refresh_token',
                            'refresh_token' => $student->etuutt_refresh_token
                        ];
                        try {
                            $response = $client->post('/api/oauth/token', ['form_params' => $params]);
                        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
                            // An error 400 from the server is usual when the authorization_code
                            // has expired. We force deconnexion to let hom renew his token
                            return null;
                        }

                        $json = json_decode($response->getBody()->getContents(), true);
                        $student->etuutt_access_token = $json['access_token'];
                        $student->etuutt_refresh_token = $json['refresh_token'];
                        $student->save();

                        return $this->getProfilePicture($student);
                    } else {
                        return null;
                    }
                }
            }
            return null;
        } catch (\GuzzleHttp\Exception\GuzzleException $e) {
            return null;
        }

        return $response->getBody();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $students_profile_picture_path = public_path().'/uploads/students-trombi/';

        $i = 0;
        $list = User::student()->get();
        foreach ($list as $student) {
            $i++;
            echo $i . "/" . $list->count() . " " . $student->fullName() . " " . "\n";
            $picture = $this->getProfilePicture($student);
            if (empty($picture)) {
                echo "Error while trying to download student picture of ". $student->fullName() . " (" . $student->student_id . ")\n";
            }
            else {
                file_put_contents($students_profile_picture_path . $student->student_id . '.jpg', $picture);
            }
        }
        $this->info('Done!');
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [];
    }
}
