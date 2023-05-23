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

    private function getProfilePicture(string $login) {
        $client = new Client([
            'base_uri' => Config::get('services.etuutt.baseuri.api'),
            'auth' => [
                Config::get('services.etuutt.client.id'),
                Config::get('services.etuutt.client.secret')
            ]
        ]);

        $url_prefix = '/api/public/users/image/' . $login;
        try {
            $response = $client->get($url_prefix . '.png');
        } catch (ClientException $e1) {
            try {
                $response = $client->get($url_prefix . '.jpg');
            } catch (ClientException $e2) {
                try {
                    $response = $client->get($url_prefix . '_official.jpg');
                } catch (ClientException $e3) {
                    return null;
                }
            }
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
            $picture = $this->getProfilePicture($student->etuutt_login);
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
