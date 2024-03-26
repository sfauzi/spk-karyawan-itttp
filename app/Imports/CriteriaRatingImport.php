<?php

namespace App\Imports;

use App\Models\CriteriaRating;
use App\Http\Controllers\Admin\CriteriaRatingController;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class CriteriaRatingImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CriteriaRating([
            'criteria_id' => $row['criteria_id'],
            'rating' => $row['rating'],
            'description' => $row['description'],
        ]);
    }
}
