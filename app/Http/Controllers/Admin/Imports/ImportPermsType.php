<?php
namespace App\Http\Controllers\Admin\Imports;

use App\Models\PermType;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportPerms implements ToModel {
    public function model(array $row)
    {
        return new PermType([
            'name' => $row[0],
            'description' => $row[1],
            'points' => $row[2],
            'users.*' => $row[3],
        ]);
    }
}
