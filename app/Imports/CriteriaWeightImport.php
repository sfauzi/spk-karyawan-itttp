<?php

namespace App\Imports;

use App\Models\CriteriaWeight;
use Maatwebsite\Excel\Concerns\ToModel;

class CriteriaWeightImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CriteriaWeight([
            
                'name' => $row[1],
                'type' => $row[2],
                'weight' => $row[3],
                'description' => $row[4],
           
        ]);
    }
}
