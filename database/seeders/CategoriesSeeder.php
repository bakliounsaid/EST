<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Senior', 'description' => 'Catégorie senior', 'objective' => 'Niveau avancé', 'image' => 'images/team.jpg'],
            ['name' => 'U19', 'description' => 'Moins de 19 ans', 'objective' => 'Niveau secondaire', 'image' => 'images/team.jpg'],
            ['name' => 'U17', 'description' => 'Moins de 17 ans', 'objective' => 'Début de l’adolescence', 'image' => 'images/team.jpg'],
            ['name' => 'U15', 'description' => 'Moins de 15 ans', 'objective' => 'Pré-adolescent', 'image' => 'images/team.jpg'],
            ['name' => 'U14', 'description' => 'Moins de 14 ans', 'objective' => 'Pré-adolescent', 'image' => 'images/team.jpg'],
            ['name' => 'U13', 'description' => 'Moins de 13 ans', 'objective' => 'Pré-adolescent', 'image' => 'images/team.jpg'],
            ['name' => 'U12', 'description' => 'Moins de 12 ans', 'objective' => 'Jeune enfant', 'image' => 'images/team.jpg'],
            ['name' => 'U11', 'description' => 'Moins de 11 ans', 'objective' => 'Jeune enfant', 'image' => 'images/team.jpg'],
            ['name' => 'U10', 'description' => 'Moins de 10 ans', 'objective' => 'Jeune enfant', 'image' => 'images/team.jpg'],
            ['name' => 'U9', 'description' => 'Moins de 9 ans', 'objective' => 'Jeune enfant', 'image' => 'images/team.jpg'],
            ['name' => 'U8', 'description' => 'Moins de 8 ans', 'objective' => 'Jeune enfant', 'image' => 'images/team.jpg'],
            ['name' => 'U7', 'description' => 'Moins de 7 ans', 'objective' => 'Jeune enfant', 'image' => 'images/team.jpg'],
        ]);
    }
}
