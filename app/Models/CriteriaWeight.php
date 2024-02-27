<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CriteriaWeight extends Model
{
    use HasFactory;

    protected $table = 'criteriaweights';

    protected $fillable = [
        'name',
        'type',
        'weight',
        'description',
    ];
}
