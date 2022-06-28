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
}
