<?php

namespace Database\Seeders;

use App\Models\Cars;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cars::create([
            'brand'             => 'Volkswagen',
            'type'              => 'Golf 7',
            'number_plate'      => 'AU-67-IO',
            'problem'           => 'Rechter achterlicht kapot',
        ]);

        Cars::create([
            'brand'             => 'Ferrari',
            'type'              => 'F8',
            'number_plate'      => 'TH-78-KL',
            'problem'           => 'Geen probleem bekend',
        ]);

        Cars::create([
            'brand'             => 'Fiat',
            'type'              => '500',
            'number_plate'      => '90-KL-TR',
            'problem'           => 'Bumper ingedeukt',
        ]);

        Cars::create([
            'brand'             => 'Mercedes',
            'type'              => 'C63 GT',
            'number_plate'      => 'YY-OP-78',
            'problem'           => 'Geen probleem bekend',
        ]);

        Cars::create([
            'brand'             => 'Volkswagen',
            'type'              => 'Golf 7',
            'number_plate'      => 'AU-67-IO',
            'problem'           => 'Radio kapot',
        ]);
    }
}
