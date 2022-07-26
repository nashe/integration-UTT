<?php
namespace App\Http\Controllers\Admin\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use App\Models\User;
use App\Models\Team;
use App\Models\Faction;
use App\Models\Newcomer;
use Request;

class ExportRawStudents implements FromCollection {
    public function collection() {
        $users = User::select(['*', \DB::raw('(ce AND team_accepted) AS ce')])
        ->orderBy('last_name')->get();

        return collect($users);
    }

    public function headings(): array
    {
        return [
            'id',
            'Numéro étudiant',
            'Prénom',
            'Nom',
            'Sexe',
            'Surnom',
            'Email',
            'Téléphone',
            'Code postal',
            'Ville',
            'Pays',
            'Branche',
            'Niveau',
            'Facebook',
            'Parrain',
            'Texte parrain',
            'Nombre de filleuls maximum',
            'Nombre de filleuls validés',
            'CE',
            'Id équipe',
            'Équipe acceptée',
            'Bénévole',
            'Orga',
            'Admin',
            'WEI',
            'Checkin WEI',
            'Payement WEI',
            'Payement sandwich',
            'Payement caution',
            'Token accès étuutt',
            'Token refresh étuutt',
            'Dernière connexion',
            'Crée le',
            'Modifié le',
            'Checkin',
            'Nouveau',
            'Login',
            'Mot de passe',
            'Date de naissance',
            'Email d\'inscription',
            'Téléphone d\'inscription',
            'Id du filleul',
            'Checklist',
            'Nom des parents',
            'Numéro des parents',
            'Allergies',
            'Traitement',
            'Notes médicales',
            'Parrainage',
            'Autorisation parentale',
            'Remember Token',
            'Publicité acceptée',
            'id appareil',
            'Latitude',
            'Longitude',
            'Discord',
            'Sécu',
            'Bus WEI',
            'Tâche bénévole',
            'Mission',
            'Login étu',
            'QR Code',
            'Numéro admission',
            'Majorité WEI',
            'Pas de synchro',
            'Mission Respo',
            'Ordre mission',
            'Sleeping bag'
        ];
    }
}
