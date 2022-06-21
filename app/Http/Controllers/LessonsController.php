<?php

namespace App\Http\Controllers;

use App\Models\Lessons;
use Illuminate\Http\Request;


class LessonsController extends Controller
{
    /*
     * Genereer de view van het overzicht van de rijlessen.
     * Makkelijk gezegd: Zorg dat de URL werkt om het overzicht te zien met de beschikbare routes.
     */
    public function index()
    {
        /*
         * De data ophalen uit de database met de relatie in de lesson_type table dat we uit de model Lessons ophalen.
         * Als er veel data aanwezig is dient deze niet direct opgehaald te worden, maar pas gecollect te worden als hier
         * om gevraagd word.
         */
        $lessons = Lessons::with('lessonType')->where('visible', '1')->orderBy('created_at', 'desc')->lazy()->collect();

        /*
         * Return de view naar de bezoeker met de opgehaalde data uit $lessons.
         */
        return view('lessons.index')->with([
            'lessons'   =>  $lessons,
        ]);
    }

    /*
     * Genereer de view van het overzicht van de oude rijlessen die 'verwijderd' zijn.
     * Makkelijk gezegd: Zorg dat de URL werkt om het overzicht te zien met de beschikbare routes.
     */
    public function archive()
    {
        /*
         * De data ophalen uit de database met de relatie in de lesson_type table dat we uit de model Lessons ophalen.
         * Als er veel data aanwezig is dient deze niet direct opgehaald te worden, maar pas gecollect te worden als hier
         * om gevraagd word.
         *
         * We tonen alleen de data dat onzichtbaar is, dus technische gezien 'verwijdert' is.
         */
        $lessons = Lessons::with('lessonType')->where('visible', '0')->orderBy('created_at', 'desc')->lazy()->collect();

        /*
         * Return de view naar de bezoeker met de opgehaalde data uit $lessons.
         */
        return view('lessons.archive')->with([
            'lessons'   =>  $lessons,
        ]);
    }

    /*
     * Genereer de view van de pagina waar je een rijles inplant.
     * Makkelijk gezegd: Zorg dat de URL werkt om de pagina voor de reservering te zien met de beschikbare routes.
     */
    public function create(Request $request)
    {
        /*
         * Wanneer gebruiker op de submit klopt drukt, controleren we of de velden voldoen aan onze vereisten.
         */
        if($request->isMethod('post')) {
            $attributes = request()->validate( [
                'lesson_type'           => ['required', 'min:1', 'max:5'],
                'student_id'            => ['required', 'min:1', 'max:5'],
                'instructor_id'         => ['required', 'min:1', 'max:5'],
                'location'              => ['required', 'min:3', 'max:100'],
                'date'                  => ['required', 'min:3', 'max:20'],
                'begin_time'            => ['required', 'min:3', 'max:10'],
                'end_time'              => ['required', 'min:3', 'max:10'],
                'information'           => [],
            ]);

            /*
             * Als alles klopt, slaan we alle ingevulden velden op in de database.
             */
            Lessons::create($attributes);

            /*
             * Als we alles opgeslagen hebben, linken we terug naar het overzicht.
             */
            return redirect()->route('lessons.index')->with('success', 'Je hebt succesvol een rijles ingepland!');
        }

        /*
         * Return de view naar de gebruiker om het formulier in te kunnen vullen.
         */
        return view('lessons.create')->with([

        ]);
    }

    /*
     * Genereer de view van de pagina waar je een rijles kan bewerken.
     * Makkelijk gezegd: Zorg dat de URL werkt om de pagina voor de reservering bewerken te zien met de beschikbare routes.
     */
    public function edit(Request $request, $id)
    {
        /*
         * Haal uit de database de juiste gegevens op van de rijles die we willen aanpassen.
         */
        $lesson = Lessons::where('id', $id)->firstOrFail();

        /*
         * Wanneer gebruiker op de submit klopt drukt, controleren we of de velden voldoen aan onze vereisten.
         */
        if($request->isMethod('post')) {
            $attributes = request()->validate( [
                'lesson_type'           => ['required', 'min:1', 'max:5'],
                'student_id'            => ['required', 'min:1', 'max:5'],
                'instructor_id'         => ['required', 'min:1', 'max:5'],
                'location'              => ['required', 'min:3', 'max:100'],
                'date'                  => ['required', 'min:3', 'max:20'],
                'begin_time'            => ['required', 'min:3', 'max:10'],
                'end_time'              => ['required', 'min:3', 'max:10'],
                'information'           => [],
            ]);

            /*
             * Als alles klopt, slaan we alle ingevulden velden op in de database.
             */
            Lessons::where('id', $id)->update($attributes);

            /*
             * Als we alles opgeslagen hebben, linken we terug naar het overzicht.
             */
            return redirect()->route('lessons.index')->with('success', 'Je hebt succesvol een rijles aangepast!');
        }

        /*
         * Return de view naar de gebruiker om het formulier in te kunnen vullen met de juiste waarde van $lesson.
         */
        return view('lessons.edit')->with([
            'lesson'   =>  $lesson,
        ]);
    }

    /*
     * Genereer de pagina om een rijles te verwijderen.
     */
    public function delete(Request $request, $id)
    {
        /*
         * Haal de rijles op met het id dat je opgehaald hebt vanuit de knop.
         * Verwijder de rijles door hem op invisible te zetten (zodat het archief aanwezig blijft).
         */
        Lessons::where('id', $id)->update([ 'visible' => '0' ]);

        /*
         * Als je dat succesvol hebt gedaan, word je terug gestuurd naar het overzicht met een melding.
         */
        return redirect()->route('lessons.index')->with('success', 'Rijles succesvol verwijderd');
    }

    /*
     * Genereer de pagina om een rijles weer terug te halen uit het archief.
     */
    public function publish(Request $request, $id)
    {
        /*
         * Haal de rijles op met het id dat je opgehaald hebt vanuit de knop.
         * Haal de rijles terug door hem op visible te zetten (zodat die terug komt in het overzicht).
         */
        Lessons::where('id', $id)->update([ 'visible' => '1' ]);

        /*
         * Als je dat succesvol hebt gedaan, word je terug gestuurd naar het overzicht met een melding.
         */
        return redirect()->route('lessons.archive')->with('success', 'Rijles succesvol terugehaald uit archief');
    }
}
