<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagersSeeder extends Seeder
{
    /**
     * Seed the managers table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('managers')->insert([
            [
                'first_name' => 'Nabil',
                'last_name' => 'Brihmat',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'diplome_type' => 'CAF C',
                'is_active' => false,
                'role' => 'Entraîneur',
                'phone' => '123456789',
                'email' => 'nabil@example.com',
                'city_id' => 100,
                'category_id' => 1,
                'address' => '123 Rue Nom, Alger',
                'salary' => 15000,
                'image' => 'images/coach.jpg',
            ],
            [
                'first_name' => 'Benazzouz',
                'last_name' => 'Nassin',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'diplome_type' => 'FAF3',
                'is_active' => false,
                'role' => 'Entraîneur adjoint',
                'phone' => '987654321',
                'email' => 'nassin@example.com',
                'city_id' => 100,
                'category_id' => 2,
                'address' => '456 Avenue Nom, Oran',
                'salary' => 15000,
                'image' => 'images/coach.jpg',
            ],
            [
                'first_name' => 'Benzaid',
                'last_name' => 'Nacer',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'diplome_type' => 'FAF3',
                'is_active' => false,
                'role' => 'Préparateur physique',
                'phone' => '456123789',
                'email' => 'nacer@example.com',
                'city_id' => 100,
                'category_id' => 3,
                'address' => '789 Boulevard Nom, Constantine',
                'salary' => 15000,
                'image' => 'images/coach.jpg',
            ],
            [
                'first_name' => 'Khattaoui',
                'last_name' => 'Abdellah',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'diplome_type' => 'FAF3',
                'is_active' => false,
                'role' => 'Scout',
                'phone' => '321654987',
                'email' => 'abdellah@example.com',
                'city_id' => 100,
                'category_id' => 4,
                'address' => '321 Route Nom, Annaba',
                'salary' => 15000,
                'image' => 'images/coach.jpg',
            ],
            [
                'first_name' => 'Amine',
                'last_name' => 'Brahimi',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'diplome_type' => 'CAF B',
                'is_active' => false,
                'role' => 'Entraîneur',
                'phone' => '555123456',
                'email' => 'amine@example.com',
                'city_id' => 100,
                'salary' => 15000,
                'category_id' => 5,
                'address' => '654 Rue Nom, Blida',
                'image' => 'images/coach.jpg',
            ],
            [
                'first_name' => 'Samira',
                'last_name' => 'Moussa',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'diplome_type' => 'CAF A',
                'is_active' => false,
                'role' => 'Entraîneur',
                'phone' => '777654321',
                'email' => 'samira@example.com',
                'city_id' => 100,
                'salary' => 15000,
                'category_id' => 6,
                'address' => '987 Avenue Nom, Tlemcen',
                'image' => 'images/coach.jpg',
            ],
            [
                'first_name' => 'Omar',
                'last_name' => 'Zidane',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'diplome_type' => 'FAF2',
                'is_active' => false,
                'role' => 'Directeur technique',
                'phone' => '888777666',
                'email' => 'omar@example.com',
                'city_id' => 100,
                'category_id' => 7,
                'salary' => 15000,
                'address' => '321 Boulevard Nom, Sétif',
                'image' => 'images/omar_zidane.jpg',
            ],
            [
                'first_name' => 'Khaled',
                'last_name' => 'Ait Ahmed',
                'contract_start' => '2024-01-01',
                'contract_end' => '2024-12-31',
                'diplome_type' => 'FAF1',
                'is_active' => false,
                'role' => 'Entraîneur des jeunes',
                'phone' => '999888777',
                'email' => 'khaled@example.com',
                'city_id' => 100,
                'category_id' => 8,
                'salary' => 15000,
                'address' => '654 Route Nom, Bordj Bou Arréridj',
                'image' => 'images/coach.jpg',
            ],
        ]);
    }
}

