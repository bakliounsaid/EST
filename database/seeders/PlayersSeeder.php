<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersSeeder extends Seeder
{
    /**
     * Seed the players table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('players')->insert([
            [
                'first_name' => 'Ali',
                'last_name' => 'Ben Ali',
                'blood_category' => 'O+',
                'city_id' => 1, // Ajuster si nécessaire
                'date_of_birth' => '2001-05-15',
                'age' => 23,
                'position' => 'Attaquant',
                'category_id' => 1, // Senior
                'has_insurance' => true,
                'phone' => '123456789',
                'parent_phone' => '987654321',
                'email' => 'ali.benali@example.com',
                'number' => '9',
                'school_level' => null, // Non applicable pour Senior
                'image' => 'images/player.jpg',
            ],
            [
                'first_name' => 'Karim',
                'last_name' => 'Belaid',
                'blood_category' => 'A-',
                'city_id' => 2, // Ajuster si nécessaire
                'date_of_birth' => '2005-07-20',
                'age' => 19,
                'position' => 'Milieu de terrain',
                'category_id' => 2, // U19
                'has_insurance' => true,
                'phone' => '223344556',
                'parent_phone' => '556677889',
                'email' => 'karim.belaid@example.com',
                'number' => '8',
                'school_level' => 'Lycée',
                'image' => 'images/player.jpg',
            ],
            [
                'first_name' => 'Ahmed',
                'last_name' => 'Khalil',
                'blood_category' => 'B+',
                'city_id' => 3, // Ajuster si nécessaire
                'date_of_birth' => '2007-03-10',
                'age' => 17,
                'position' => 'Défenseur',
                'category_id' => 3, // U17
                'has_insurance' => true,
                'phone' => '334455667',
                'parent_phone' => '667788990',
                'email' => 'ahmed.khalil@example.com',
                'number' => '4',
                'school_level' => 'Lycée',
                'image' => 'images/player.jpg',
            ],
            [
                'first_name' => 'Omar',
                'last_name' => 'Hassan',
                'blood_category' => 'AB-',
                'city_id' => 4, // Ajuster si nécessaire
                'date_of_birth' => '2009-01-25',
                'age' => 15,
                'position' => 'Gardien de but',
                'category_id' => 4, // U15
                'has_insurance' => true,
                'phone' => '445566778',
                'parent_phone' => '778899001',
                'email' => 'omar.hassan@example.com',
                'number' => '1',
                'school_level' => 'Collège',
                'image' => 'images/player.jpg',
            ],
            [
                'first_name' => 'Samir',
                'last_name' => 'Amir',
                'blood_category' => 'O-',
                'city_id' => 5, // Ajuster si nécessaire
                'date_of_birth' => '2010-09-12',
                'age' => 14,
                'position' => 'Ailier',
                'category_id' => 5, // U14
                'has_insurance' => true,
                'phone' => '556677889',
                'parent_phone' => '889900112',
                'email' => 'samir.amir@example.com',
                'number' => '7',
                'school_level' => 'Collège',
                'image' => 'images/player.jpg',
            ],
            [
                'first_name' => 'Rami',
                'last_name' => 'Jamal',
                'blood_category' => 'A+',
                'city_id' => 6, // Ajuster si nécessaire
                'date_of_birth' => '2012-12-05',
                'age' => 12,
                'position' => 'Attaquant',
                'category_id' => 6, // U13
                'has_insurance' => true,
                'phone' => '667788990',
                'parent_phone' => '990011223',
                'email' => 'rami.jamal@example.com',
                'number' => '10',
                'school_level' => 'École primaire',
                'image' => 'images/player.jpg',
            ],
            [
                'first_name' => 'Yassir',
                'last_name' => 'Fares',
                'blood_category' => 'B-',
                'city_id' => 7, // Ajuster si nécessaire
                'date_of_birth' => '2014-04-20',
                'age' => 10,
                'position' => 'Milieu de terrain',
                'category_id' => 7, // U12
                'has_insurance' => true,
                'phone' => '778899001',
                'parent_phone' => '001122334',
                'email' => 'yassir.fares@example.com',
                'number' => '6',
                'school_level' => 'École primaire',
                'image' => 'images/player.jpg',
            ],
            [
                'first_name' => 'Hassan',
                'last_name' => 'Zouaoui',
                'blood_category' => 'O+',
                'city_id' => 8, // Ajuster si nécessaire
                'date_of_birth' => '2016-06-15',
                'age' => 8,
                'position' => 'Attaquant',
                'category_id' => 8, // U11
                'has_insurance' => true,
                'phone' => '889900112',
                'parent_phone' => '112233445',
                'email' => 'hassan.zouaoui@example.com',
                'number' => '5',
                'school_level' => 'École primaire',
                'image' => 'images/player.jpg',
            ],
            [
                'first_name' => 'Amir',
                'last_name' => 'Belhadj',
                'blood_category' => 'AB+',
                'city_id' => 9, // Ajuster si nécessaire
                'date_of_birth' => '2018-08-25',
                'age' => 6,
                'position' => 'Attaquant',
                'category_id' => 9, // U10
                'has_insurance' => true,
                'phone' => '990011223',
                'parent_phone' => '223344556',
                'email' => 'amir.belhadj@example.com',
                'number' => '11',
                'school_level' => 'École primaire',
                'image' => 'images/player.jpg',
            ],
            [
                'first_name' => 'Khalil',
                'last_name' => 'Mansour',
                'blood_category' => 'A-',
                'city_id' => 10, // Ajuster si nécessaire
                'date_of_birth' => '2019-11-10',
                'age' => 5,
                'position' => 'Milieu de terrain',
                'category_id' => 10, // U9
                'has_insurance' => true,
                'phone' => '001122334',
                'parent_phone' => '334455667',
                'email' => 'khalil.mansour@example.com',
                'number' => '3',
                'school_level' => 'École maternelle',
                'image' => 'images/khalil_mansour.jpg',
            ],
            [
                'first_name' => 'Ibrahim',
                'last_name' => 'Aissa',
                'blood_category' => 'B+',
                'city_id' => 11, // Ajuster si nécessaire
                'date_of_birth' => '2020-02-15',
                'age' => 4,
                'position' => 'Attaquant',
                'category_id' => 11, // U8
                'has_insurance' => true,
                'phone' => '223344556',
                'parent_phone' => '556677889',
                'email' => 'ibrahim.aissa@example.com',
                'number' => '2',
                'school_level' => 'École maternelle',
                'image' => 'images/player.jpg',
            ],
            [
                'first_name' => 'Nour',
                'last_name' => 'Fadel',
                'blood_category' => 'O-',
                'city_id' => 12, // Ajuster si nécessaire
                'date_of_birth' => '2021-03-30',
                'age' => 3,
                'position' => 'Attaquant',
                'category_id' => 12, // U7
                'has_insurance' => true,
                'phone' => '556677889',
                'parent_phone' => '889900112',
                'email' => 'nour.fadel@example.com',
                'number' => '8',
                'school_level' => 'École maternelle',
                'image' => 'images/player.jpg',
            ],
        ]);
    }
}
