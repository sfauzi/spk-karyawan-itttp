<?php

namespace App\Imports;

use App\Models\CriteriaWeight;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CriteriaWeightImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CriteriaWeight([
            
                'name' => $row['name'],
                'type' => $row['type'],
                'weight' => $row['weight'],
                'description' => $row['description'],
           
        ]);
    }
}
