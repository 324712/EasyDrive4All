<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;

    /*
     * Laravel laten weten dat hij moet kijken in de cars table.
     */
    protected $table = 'cars';

    /*
     * Laat Laravel weten welke tabellen er ingevuld mogen worden in de database.
     */
    protected $fillable = [
        'brand', 'type', 'number_plate', 'problem'
    ];
}
