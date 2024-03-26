<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class CriteriaRating extends Model
{
    use HasFactory;

    // use SoftDeletes;

    protected $table = 'criteriaratings';

    protected $fillable = [
        'criteria_id',
        'rating',
        'description',
    ];
}
