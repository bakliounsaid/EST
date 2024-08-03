<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ManagerPaymentsSeeder extends Seeder
{
    /**
     * Seed the manager_payments table.
     *
     * @return void
     */
    public function run()
    {
        // Example manager IDs
        $managerIds = [1, 2, 3, 4, 5, 6];

        DB::table('manager_salaries')->insert([
            [
                'manager_id' => $managerIds[0],
                'cost' => 1000.00,
                'type' => 'Salaire',
                'status' => 0,
                'description' => 'Salaire pour le mois de janvier',
            ],
            [
                'manager_id' => $managerIds[1],
                'cost' => 1200.00,
                'type' => 'Salaire',
                'status' => 0,
                'description' => 'Salaire pour le mois de février',
            ],
            [
                'manager_id' => $managerIds[2],
                'cost' => 1100.00,
                'type' => 'Salaire',
                'status' => 0,
                'description' => 'Salaire pour le mois de mars',
            ],
            [
                'manager_id' => $managerIds[3],
                'cost' => 1300.00,
                'type' => 'Bonus',
                'status' => 0,
                'description' => 'Bonus pour performance exceptionnelle',
            ],
            [
                'manager_id' => $managerIds[4],
                'cost' => 1400.00,
                'type' => 'Salaire',
                'status' => 0,
                'description' => 'Salaire pour le mois d\'avril',
            ],
            [
                'manager_id' => $managerIds[5],
                'cost' => 1500.00,
                'type' => 'Bonus',
                'status' => 0,
                'description' => 'Bonus pour succès du tournoi',
            ],
        ]);
    }
}
