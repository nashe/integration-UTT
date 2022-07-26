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

class ExportReferralsToNewcomers implements FromCollection, WithHeadings {
    public function collection() {
        $referrals = User::select([\DB::raw('users.first_name'), \DB::raw('users.last_name')])
        ->orderBy('last_name')
        ->rightjoin('users as n', 'users.id', '=', 'n.referral_id')
        ->addSelect([\DB::raw('n.branch as branch'), \DB::raw('n.first_name as newcomer_first_name'), \DB::raw('n.last_name as newcomer_last_name'), \DB::raw('n.phone as newcomer_phone')])
        ->where('n.is_newcomer', true)
        ->get();

        return collect($referrals);
    }

    public function headings(): array
    {
        return [
            'Prénom',
            'Nom',
        ];
    }
}
