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
            'location'  =>  'Privelaan 300, 0000 AB Utrecht',
            'lessons'   =>  20,
        ]);

        User::create([
            'user_type' =>  1,
            'email'     =>  'saidavanvuure@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Saida van Vuure',
            'location'  =>  'Privelaan 300, 0000 AB Utrecht',
            'lessons'   =>  25,
        ]);

        User::create([
            'user_type' =>  1,
            'email'     =>  'meghanvandenelshout@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Meghan van den Elshout',
            'location'  =>  'Privelaan 300, 0000 AB Utrecht',
            'lessons'   =>  30,
        ]);

        User::create([
            'user_type' =>  1,
            'email'     =>  'lottiemeerkerk@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Lottie Meerkerk',
            'location'  =>  'Overweg 7, 3678 LL Nieuwegein',
            'lessons'   =>  20,
        ]);

        User::create([
            'user_type' =>  1,
            'email'     =>  'egbertusvandenhoven@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Egbertus van den Hoven',
            'location'  =>  'Groenlo 44, 3822 AS Houten',
            'lessons'   =>  25,
        ]);

        User::create([
            'user_type' =>  1,
            'email'     =>  'indyhaan@outlook.com',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Indy Haan',
            'location'  =>  'Laan 45, 3950 UV Utrecht',
            'lessons'   =>  30,
        ]);

        User::create([
            'user_type' =>  2,
            'email'     =>  'qassim@autorijschooleasydrive4all.nl',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Qassim Kurdi',
            'location'  =>  'Privelaan 300, 0000 AB Utrecht',
            'lessons'   =>  0,
        ]);

        User::create([
            'user_type' =>  2,
            'email'     =>  'arjan@autorijschooleasydrive4all.nl',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Arjan de Ruijter',
            'location'  =>  'Privelaan 300, 0000 AB Utrecht',
            'lessons'   =>  0,
        ]);

        User::create([
            'user_type' =>  2,
            'email'     =>  'jesse@autorijschooleasydrive4all.nl',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Jesse Malotaux',
            'location'  =>  'Privelaan 300, 0000 AB Utrecht',
            'lessons'   =>  0,
        ]);

        User::create([
            'user_type' =>  3,
            'email'     =>  'mitchel@autorijschooleasydrive4all.nl',
            'password'  =>  bcrypt('Drive4All'),
            'fullname'  =>  'Mitchel Jansen',
            'location'  =>  'Privelaan 300, 0000 AB Utrecht',
            'lessons'   =>  0,
        ]);
    }
}
