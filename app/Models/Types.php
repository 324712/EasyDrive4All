<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;

    /*
     * Laravel laten weten dat hij moet kijken in de lesson_types table.
     */
    protected $table = 'lesson_types';
}
