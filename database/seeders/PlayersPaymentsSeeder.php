<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlayersPaymentsSeeder extends Seeder
{
    /**
     * Seed the player_payments table.
     *
     * @return void
     */
    public function run()
    {
        // Example player IDs
        $playerIds = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        DB::table('player_payments')->insert([
            [
                'player_id' => $playerIds[0],
                'cost' => 150.00,
                'type' => 'Déplacement',
                'description' => 'Frais pour déplacement en match',
            ],
            [
                'player_id' => $playerIds[1],
                'cost' => 200.00,
                'type' => 'Inscription',
                'description' => 'Frais d\'inscription au tournoi',
            ],
            [
                'player_id' => $playerIds[2],
                'cost' => 100.00,
                'type' => 'Équipement',
                'description' => 'Achat de nouveaux équipements sportifs',
            ],
            [
                'player_id' => $playerIds[3],
                'cost' => 250.00,
                'type' => 'Entraînement',
                'description' => 'Coût pour les séances d\'entraînement',
            ],
            [
                'player_id' => $playerIds[4],
                'cost' => 120.00,
                'type' => 'Autre',
                'description' => 'Autres frais divers',
            ],
            [
                'player_id' => $playerIds[5],
                'cost' => 180.00,
                'type' => 'Déplacement',
                'description' => 'Frais pour déplacement en match',
            ],
            [
                'player_id' => $playerIds[6],
                'cost' => 220.00,
                'type' => 'Inscription',
                'description' => 'Frais d\'inscription au tournoi',
            ],
            [
                'player_id' => $playerIds[7],
                'cost' => 130.00,
                'type' => 'Équipement',
                'description' => 'Achat de nouveaux équipements sportifs',
            ],
            [
                'player_id' => $playerIds[8],
                'cost' => 270.00,
                'type' => 'Entraînement',
                'description' => 'Coût pour les séances d\'entraînement',
            ],
            [
                'player_id' => $playerIds[9],
                'cost' => 110.00,
                'type' => 'Autre',
                'description' => 'Autres frais divers',
            ],
        ]);
    }
}
