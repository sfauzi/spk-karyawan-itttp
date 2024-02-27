<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlternativeScore extends Model
{
    use HasFactory;

    protected $table = 'alternativescores';

    protected $fillable = [
        'alternative_id',
        'criteria_id',
        'rating_id',
    ];
}
