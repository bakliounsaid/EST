<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrainingsSeeder extends Seeder
{
    /**
     * Seed the training_sessions table.
     *
     * @return void
     */
    public function run()
    {
        $categoryIds = [1, 2, 3, 4];
        $managerIds = [1, 2, 3, 4];

        DB::table('training_sessions')->insert([
            [
                'category_id' => $categoryIds[0],
                'manager_id' => $managerIds[0],
                'description' => 'Séance de formation sur les techniques de base',
                'date' => '2024-08-15',
            ],
            [
                'category_id' => $categoryIds[1],
                'manager_id' => $managerIds[1],
                'description' => 'Entraînement sur les stratégies offensives',
                'date' => '2024-08-16',
            ],
            [
                'category_id' => $categoryIds[2],
                'manager_id' => $managerIds[2],
                'description' => 'Session de perfectionnement défensif',
                'date' => '2024-08-17',
            ],
            [
                'category_id' => $categoryIds[3],
                'manager_id' => $managerIds[3],
                'description' => 'Entraînement général avec mise en pratique',
                'date' => '2024-08-18',
            ],
        ]);
    }
}
