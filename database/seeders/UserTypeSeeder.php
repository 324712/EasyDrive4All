<?php

namespace Database\Seeders;

use App\Models\UserTypes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserTypes::create([
            'name'  =>  'Student',
        ]);

        UserTypes::create([
            'name'  =>  'Rijinstructeur',
        ]);

        UserTypes::create([
            'name'  =>  'Eigenaar',
        ]);
    }
}
