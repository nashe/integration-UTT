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

class ExportStudents implements FromCollection, WithHeadings {
    public function collection() {
        $users = User::select(['first_name', 'last_name', 'student_id', 'phone', 'email', 'branch','registration_email',
        \DB::raw('is_newcomer as nouveau'), \DB::raw('referral_validated as parrain'), \DB::raw('IF(team_id > 0,1,0) as ce'), \DB::raw('volunteer as benevole'), 'orga', 'secu', 'wei', \DB::raw('checkin as checkin_wei'), 'wei_majority', 'bus_id'])
        ->orderBy('last_name')
        ->get();

        return collect($users);
    }

    public function headings(): array
    {
        return [
            'Prénom',
            'Nom',
            'Numéro d\'étudiant',
            'Téléphone',
            'Email',
            'Branche',
            'Email d\'inscription',
            'Nouveau',
            'Parrain',
            'CE',
            'Bénévole',
            'Orga',
            'Secu',
            'Wei',
            'Checkin Wei',
            'Majorité Wei',
            'Bus Wei',
        ];
    }
}
