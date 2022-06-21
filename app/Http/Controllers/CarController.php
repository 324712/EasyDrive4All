<?php

namespace App\Http\Controllers;

use App\Models\CarProblems;
use App\Models\Cars;
use App\Models\Lessons;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /*
     * Genereer de view van het overzicht van de rijlessen.
     * Makkelijk gezegd: Zorg dat de URL werkt om het overzicht te zien met de beschikbare routes.
     */
    public function index()
    {
        /*
         * De data ophalen uit de database met de relatie in de car_id table dat we uit de model CarProblems ophalen.
         * Als er veel data aanwezig is dient deze niet direct opgehaald te worden, maar pas gecollect te worden als hier
         * om gevraagd word.
         */
        $cars = Cars::where('visible', '1')->orderBy('number_plate', 'desc')->get()->all();

        /*
         * Return de view naar de bezoeker met de opgehaalde data uit $cars.
         */
        return view('cars.index')->with([
            'cars'              =>  $cars,
        ]);
    }

    /*
     * Genereer de view van het overzicht van de oude problemen.
     * Makkelijk gezegd: Zorg dat de URL werkt om het overzicht te zien met de beschikbare routes.
     */
    public function archive()
    {
        /*
         * De data ophalen uit de database uit de model Cars ophalen.
         * We tonen alleen de data dat onzichtbaar is, dus technische gezien 'verwijdert' is.
         */
        $cars = Cars::where('visible', '0')->orderBy('number_plate', 'desc')->get()->all();

        /*
         * Return de view naar de bezoeker met de opgehaalde data uit $cars.
         */
        return view('cars.archive')->with([
            'cars'              =>  $cars,
        ]);
    }

    /*
     * Genereer de view van de pagina waar je een probleem meld.
     * Makkelijk gezegd: Zorg dat de URL werkt om de pagina om het probleem te melden met de beschikbare routes.
     */
    public function create(Request $request)
    {
        /*
         * Wanneer gebruiker op de submit klopt drukt, controleren we of de velden voldoen aan onze vereisten.
         */
        if($request->isMethod('post')) {
            $attributes = request()->validate( [
                'brand'           => ['required', 'min:1', 'max:100'],
                'type'            => ['required', 'min:1', 'max:100'],
                'number_plate'    => ['required', 'min:1', 'max:100'],
                'problem'         => ['required', 'min:3', 'max:100'],
            ]);

            /*
             * Als alles klopt, slaan we alle ingevulden velden op in de database.
             */
            Cars::create($attributes);

            /*
             * Als we alles opgeslagen hebben, linken we terug naar het overzicht.
             */
            return redirect()->route('cars.index')->with('success', 'Je hebt succesvol een probleem gemeld');
        }

        /*
         * Return de view naar de gebruiker om het formulier in te kunnen vullen.
         */
        return view('cars.create')->with([

        ]);
    }

    /*
     * Genereer de pagina om een probleem te verwijderen.
     */
    public function delete(Request $request, $id)
    {
        /*
         * Haal de probleem op met het id dat je opgehaald hebt vanuit de knop.
         * Verwijder de probleem door hem op invisible te zetten (zodat het archief aanwezig blijft).
         */
        Cars::where('id', $id)->update([ 'visible' => '0' ]);

        /*
         * Als je dat succesvol hebt gedaan, word je terug gestuurd naar het overzicht met een melding.
         */
        return redirect()->route('cars.index')->with('success', 'Probleem succesvol verwijderd');
    }

    /*
     * Genereer de pagina om een probleem weer terug te halen uit het archief.
     */
    public function publish(Request $request, $id)
    {
        /*
         * Haal de probleem op met het id dat je opgehaald hebt vanuit de knop.
         * Haal de probleem terug door hem op visible te zetten (zodat die terug komt in het overzicht).
         */
        Cars::where('id', $id)->update([ 'visible' => '1' ]);

        /*
         * Als je dat succesvol hebt gedaan, word je terug gestuurd naar het overzicht met een melding.
         */
        return redirect()->route('cars.archive')->with('success', 'Probleem succesvol terugehaald uit archief');
    }
}
