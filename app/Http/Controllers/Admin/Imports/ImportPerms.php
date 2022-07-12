<?php
namespace App\Http\Controllers\Admin\Imports;

use App\Models\Perm;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

class ImportPerms implements ToCollection, WithHeadingRow, WithCalculatedFormulas, SkipsEmptyRows, SkipsOnError {
    public function collection(Collection $rows)
    {
        foreach ($rows as $row)
        {
            Perm::updateOrCreate(
                [
                    'id' => $row['id'],
                ],
                [
                    'description' => $row['description'],
                    'place' => $row['lieu'],
                    'start' => $row['start_unix'],
                    'end' => $row['end_unix'],
                    'nbr_permanenciers' => $row['nbr_permanencier'],
                    'perm_type_id' => $row['perm_type'],
                    'open' => $row['ouverture_unix'],
                    'pre_open' => $row['preouverture_unix'],
                ]
            );
        }
    }

     /**
     * @return string|array
     */
    public function uniqueBy()
    {
        return 'id';
    }

    public function onError(Throwable $e)
    {
        Log::error($e->getMessage());
    }
}
