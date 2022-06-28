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

class ExportPerms implements FromCollection {
    public function collection() {
        $perms= User::select(['first_name', 'last_name', 'phone'])
        ->orderBy('start')
        ->join('perm_users', 'users.id', '=', 'perm_users.user_id')
        ->join('perms', 'perms.id', '=', 'perm_users.perm_id')
        ->addSelect([\DB::raw('first_name'), \DB::raw('last_name'), \DB::raw('phone'), \DB::raw('respo'), \DB::raw('place'), \DB::raw('FROM_UNIXTIME(start) as start'), \DB::raw('FROM_UNIXTIME(end) as end'), \DB::raw('description')])
        ->get();

        return collect($perms);
    }
}
