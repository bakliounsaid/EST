<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\PlayerSession;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            StatesSeeder::class,
            CitiesSeeder::class,
            AdminsSeeder::class,
            CategoriesSeeder::class,
            PlayersSeeder::class,
            ManagersSeeder::class,
            TrainingsSeeder::class,
            FootballMatchesSeeder::class,
            EventCostsSeeder::class,
            PlayersPaymentsSeeder::class,
            ManagerPaymentsSeeder::class,
        ]);
    }
}
