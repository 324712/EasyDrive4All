<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserTypes extends Model
{
    use HasFactory;

    /*
     * Laravel laten weten dat hij moet kijken in de user_types table.
     */
    protected $table = 'user_types';
}
