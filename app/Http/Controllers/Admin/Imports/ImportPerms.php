<?php
namespace App\Http\Controllers\Admin\Imports;

use App\Models\Perm;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportPerms implements ToModel {
    public function model(array $row)
    {
        return new Perm([
            'name' => $row[0],
            'display_name' => $row[1],
            'description' => $row[2],
        ]);
    }
}
