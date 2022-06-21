<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use Illuminate\Http\Request;

class LessonsController extends Controller
{
    public function index()
    {
        /*
         * De data ophalen uit de database met de relatie in de lesson_type table dat we uit de model Lessons ophalen.
         * Als er veel data aanwezig is dient deze niet direct opgehaald te worden, maar pas gecollect te worden als hier
         * om gevraagd word.
         */
        $lessons = Lessons::with('lessonType')->orderBy('created_at', 'desc')->lazy()->collect();

        /*
         * Return de view naar de bezoeker met de opgehaalde data uit $lessons.
         */
        return view('lessons.index')->with([
            'lessons'   =>  $lessons,
        ]);
    }
}
