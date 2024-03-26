<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Alternative extends Model
{
    use HasFactory;

    // use SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */

    protected $table = 'alternatives';

    
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

   
}
