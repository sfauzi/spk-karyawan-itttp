<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class CriteriaWeight extends Model
{
    use HasFactory;

    // use SoftDeletes;

    protected $table = 'criteriaweights';

    protected $fillable = [
        'name',
        'type',
        'weight',
        'description',
    ];
}
