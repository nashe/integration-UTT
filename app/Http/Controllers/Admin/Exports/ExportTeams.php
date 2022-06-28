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

class ExportTeams implements FromCollection {
    public function collection() {
        $users = User::select(['first_name', 'last_name', 'phone', 'email', 'team_id'])
        ->orderBy('last_name')
        ->where('ce', 1)
        ->whereNotNull('team_id')
        ->where('team_accepted', 1)
        ->join('teams as t', 't.id', '=', 'users.team_id')
        ->join('factions as f', 'f.id', '=', 't.faction_id')
        ->addSelect('t.faction_id', \DB::raw('t.name as team_name'), \DB::raw('f.name as faction_name'))
        ->get();

        return collect($users);
    }
}
