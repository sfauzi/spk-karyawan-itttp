<?php

namespace App\Imports;

use App\Models\CriteriaRating;
use App\Http\Controllers\Admin\CriteriaRatingController;
use Maatwebsite\Excel\Concerns\ToModel;

class CriteriaRatingImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new CriteriaRating([
            'criteria_id' => $row[1],
            'rating' => $row[2],
            'description' => $row[3],
        ]);
    }
}
