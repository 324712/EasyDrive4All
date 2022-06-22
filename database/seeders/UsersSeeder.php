<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'user_type' =>  1,
            'email'     =>  'hannelonebom@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Hannelore Bom',
            'lessons'   =>  20,
        ]);

        User::create([
            'user_type' =>  1,
            'email'     =>  'saidavanvuure@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Saida van Vuure',
            'lessons'   =>  25,
        ]);

        User::create([
            'user_type' =>  1,
            'email'     =>  'meghanvandenelshout@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Meghan van den Elshout',
            'lessons'   =>  30,
        ]);

        User::create([
            'user_type' =>  1,
            'email'     =>  'lottiemeerkerk@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Lottie Meerkerk',
            'lessons'   =>  20,
        ]);

        User::create([
            'user_type' =>  1,
            'email'     =>  'egbertusvandenhoven@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Egbertus van den Hoven',
            'lessons'   =>  25,
        ]);

        User::create([
            'user_type' =>  1,
            'email'     =>  'nasimvanderkruit@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Nasim van der Kruit',
            'lessons'   =>  30,
        ]);

        User::create([
            'user_type' =>  2,
            'email'     =>  'qassim@autorijschooleasydrive4all.nl',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Qassim Kurdi',
            'lessons'   =>  0,
        ]);

        User::create([
            'user_type' =>  2,
            'email'     =>  'arjan@autorijschooleasydrive4all.nl',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Arjan de Ruijter',
            'lessons'   =>  0,
        ]);

        User::create([
            'user_type' =>  2,
            'email'     =>  'jesse@autorijschooleasydrive4all.nl',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Jesse Malotaux',
            'lessons'   =>  0,
        ]);

        User::create([
            'user_type' =>  3,
            'email'     =>  'mitchel@autorijschooleasydrive4all.nl',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Mitchel Jansen',
            'lessons'   =>  0,
        ]);
    }
}
