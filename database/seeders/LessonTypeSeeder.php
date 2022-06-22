<?php

namespace Database\Seeders;

use App\Models\Types;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LessonTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Types::create([
            'name'                  => 'Gevaarherkenning',
            'description'           => 'Het herkennen van gevaar in verschillende situaties en bepalen wat je moet doen: remmen, gas loslaten of niets.',
        ]);

        Types::create([
            'name'                  => 'Gebruik van de weg',
            'description'           => 'De plaats op de weg, voorsorteren, inhalen, maximumsnelheid, stilstaan en parkeren.',
        ]);

        Types::create([
            'name'                  => 'Voorrang en voor laten gaan',
            'description'           => 'Voorrang geven op kruispunten, voor laten gaan bij afslaan en voor laten gaan van voetgangers.',
        ]);

        Types::create([
            'name'                  => 'Bijzondere wegen, weggedeelten, weggebruikers en manoeuvres',
            'description'           => 'Onder andere over rijden op een autosnelweg of in een erf. En wat je wel en niet mag doen bij bijvoorbeeld een militaire colonne of tijdens een bijzondere manoeuvre.',
        ]);

        Types::create([
            'name'                  => 'Veilig rijden met het voertuig en reageren in noodsituaties',
            'description'           => 'Het gebruik van lichten, geven van signalen, zitplaatsen, gebruik van autogordels en reageren in noodsituaties zoals pech en een ongeluk.',
        ]);

        Types::create([
            'name'                  => 'Verkeerstekens en aanwijzingen',
            'description'           => 'Verkeersborden, verkeerslichten, verkeerstekens op het wegdek en aanwijzingen van bijvoorbeeld agenten.',
        ]);

        Types::create([
            'name'                  => 'Verantwoorde verkeersdeelname en milieubewust rijden',
            'description'           => 'Welke kennis en vaardigheden zijn belangrijk voor een veilige verkeersdeelname en om zuinig te rijden? En welke risico\'s zijn er?',
        ]);

        Types::create([
            'name'                  => 'Wetgeving',
            'description'           => 'De algemene voorschriften uit de verkeerswetgeving en documenten die te maken hebben met het gebruik van de auto.',
        ]);

        Types::create([
            'name'                  => 'Voertuigkennis',
            'description'           => 'De eisen die aan de auto gesteld worden zoals lading en verlichting, en kennis van bijvoorbeeld dashboardsymbolen en gebruik van spiegels.',
        ]);
    }
}
