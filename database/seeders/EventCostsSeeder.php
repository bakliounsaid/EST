<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventCostsSeeder extends Seeder
{
    /**
     * Seed the event_costs table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event_costs')->insert([
            [
                'date' => '2024-01-15',
                'type' => 'Dépense', // Coût pour l’événement sportif
                'cost' => 5000.00,
                'category_id' => 1, // Ajuster selon les catégories
                'description' => 'Coût pour l’organisation du tournoi de football senior.',
            ],
            [
                'date' => '2024-02-20',
                'type' => 'Dépense', // Frais de participation
                'cost' => 3000.00,
                'category_id' => 2, // Ajuster selon les catégories
                'description' => 'Frais de participation pour la compétition U19.',
            ],
            [
                'date' => '2024-03-10',
                'type' => 'Dépense', // Coût de la formation
                'cost' => 2000.00,
                'category_id' => 3, // Ajuster selon les catégories
                'description' => 'Coût de la formation pour les entraîneurs U17.',
            ],
            [
                'date' => '2024-04-05',
                'type' => 'Dépense', // Frais d’organisation
                'cost' => 1500.00,
                'category_id' => 4, // Ajuster selon les catégories
                'description' => 'Frais d’organisation pour le match amical U15.',
            ],
            [
                'date' => '2024-05-12',
                'type' => 'Dépense', // Coût du séminaire
                'cost' => 2500.00,
                'category_id' => 5, // Ajuster selon les catégories
                'description' => 'Coût pour le séminaire de formation U14.',
            ],
            [
                'date' => '2024-06-18',
                'type' => 'Dépense', // Coût du camp d’été
                'cost' => 3500.00,
                'category_id' => 6, // Ajuster selon les catégories
                'description' => 'Frais pour le camp d’été pour les U13.',
            ],
            [
                'date' => '2024-07-22',
                'type' => 'Dépense', // Coût d’inscription
                'cost' => 4000.00,
                'category_id' => 7, // Ajuster selon les catégories
                'description' => 'Coût d’inscription au championnat U12.',
            ],
            [
                'date' => '2024-08-30',
                'type' => 'Dépense', // Frais d’organisation
                'cost' => 4500.00,
                'category_id' => 8, // Ajuster selon les catégories
                'description' => 'Frais d’organisation pour le tournoi U11.',
            ],
            [
                'date' => '2024-09-15',
                'type' => 'Dépense', // Frais de participation
                'cost' => 1800.00,
                'category_id' => 9, // Ajuster selon les catégories
                'description' => 'Frais de participation pour la compétition U10.',
            ],
            [
                'date' => '2024-10-10',
                'type' => 'Dépense', // Coût de l’événement de clôture
                'cost' => 2200.00,
                'category_id' => 10, // Ajuster selon les catégories
                'description' => 'Coût pour l’événement de clôture pour les U9.',
            ],
            [
                'date' => '2024-11-05',
                'type' => 'Dépense', // Frais d’organisation
                'cost' => 1200.00,
                'category_id' => 11, // Ajuster selon les catégories
                'description' => 'Frais d’organisation pour le match amical U8.',
            ],
            [
                'date' => '2024-12-20',
                'type' => 'Dépense', // Coût de la fête de fin d’année
                'cost' => 3000.00,
                'category_id' => 12, // Ajuster selon les catégories
                'description' => 'Coût pour la fête de fin d’année pour les U7.',
            ],
        ]);
    }
}
