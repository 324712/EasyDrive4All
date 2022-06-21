<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lessons extends Model
{
    use HasFactory;

    /*
     * Laravel laten weten dat hij moet kijken in de lessons table.
     */
    protected $table = 'lessons';

    protected $fillable = [
        'lesson_type', 'student_id', 'instructor_id', 'location', 'date', 'begin_time', 'end_time', 'information'
    ];

    /*
     * Een relatie aanmaken van de lessons table met de lessons_type table gebaseerd op de lesson type id.
     */
    public function lessonType()
    {
        return $this->belongsTo(Types::class, 'lesson_type', 'id');
    }

    /*
     * Een relatie aanmaken van de lessons table met de users table gebaseerd op de instructeur id.
     */
    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id', 'id');
    }

    /*
     * Een relatie aanmaken van de lessons table met de users table gebaseerd op de student id.
     */
    public function student()
    {
        return $this->belongsTo(User::class, 'student_id', 'id');
    }
}
