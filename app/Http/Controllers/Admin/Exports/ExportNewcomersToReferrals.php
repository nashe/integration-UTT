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

class ExportNewcomersToReferrals implements FromCollection {
    public function collection() {
        $newcomers = User::select([\DB::raw('users.first_name'), \DB::raw('users.last_name'), \DB::raw('users.branch')])
        ->where('users.is_newcomer', true)
        ->orderBy('last_name')
        ->leftjoin('users as s', 's.id', '=', 'users.referral_id')
        ->addSelect([\DB::raw('s.first_name as referral_first_name'), \DB::raw('s.last_name as referral_last_name'), \DB::raw('s.email as referral_email'), \DB::raw('s.phone as referral_phone')])
        ->leftjoin('teams as t', 't.id','=','users.team_id')
        ->addSelect([\DB::raw('t.name as team_name'), \DB::raw('t.registration_date as team_registration_date')])
        ->get();

        return collect($newcomers);
    }

    public function headings(): array
    {
        return [
            'Prénom',
            'Nom',
            'Branche',
        ];
    }
}
