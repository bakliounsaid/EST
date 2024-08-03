<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FootballMatchesSeeder extends Seeder
{
    /**
     * Seed the football_matches table.
     *
     * @return void
     */
    public function run()
    {
        DB::table('football_matches')->insert([
            [
                'date' => '2024-08-15',
                'city_id' => 1, // Adjust as needed
                'type' => 'Amical',
                'score_local' => 2,
                'score_extern' => 1,
                'description' => 'Match amical contre une équipe locale.',
                'category_id' => 1, // Senior
            ],
            [
                'date' => '2024-08-22',
                'city_id' => 2, // Adjust as needed
                'type' => 'Championnat',
                'score_local' => 3,
                'score_extern' => 3,
                'description' => 'Match de championnat avec un résultat nul.',
                'category_id' => 2, // U19
            ],
            [
                'date' => '2024-09-05',
                'city_id' => 3, // Adjust as needed
                'type' => 'Coupe',
                'score_local' => 1,
                'score_extern' => 0,
                'description' => 'Match de coupe, gagné par un seul but.',
                'category_id' => 3, // U17
            ],
            [
                'date' => '2024-09-12',
                'city_id' => 4, // Adjust as needed
                'type' => 'Amical',
                'score_local' => 4,
                'score_extern' => 2,
                'description' => 'Match amical avec une victoire confortable.',
                'category_id' => 4, // U15
            ],
            [
                'date' => '2024-10-01',
                'city_id' => 5, // Adjust as needed
                'type' => 'Championnat',
                'score_local' => 2,
                'score_extern' => 3,
                'description' => 'Match de championnat, défaite étroite.',
                'category_id' => 5, // U14
            ],
            [
                'date' => '2024-10-10',
                'city_id' => 6, // Adjust as needed
                'type' => 'Coupe',
                'score_local' => 0,
                'score_extern' => 0,
                'description' => 'Match de coupe terminé sur un score vierge.',
                'category_id' => 6, // U13
            ],
            [
                'date' => '2024-10-20',
                'city_id' => 7, // Adjust as needed
                'type' => 'Amical',
                'score_local' => 5,
                'score_extern' => 1,
                'description' => 'Performance solide lors d’un match amical.',
                'category_id' => 7, // U12
            ],
            [
                'date' => '2024-11-01',
                'city_id' => 8, // Adjust as needed
                'type' => 'Championnat',
                'score_local' => 1,
                'score_extern' => 2,
                'description' => 'Match de championnat avec une défaite serrée.',
                'category_id' => 8, // U11
            ],
            [
                'date' => '2024-11-15',
                'city_id' => 9, // Adjust as needed
                'type' => 'Coupe',
                'score_local' => 3,
                'score_extern' => 3,
                'description' => 'Match de coupe avec un résultat nul.',
                'category_id' => 9, // U10
            ],
            [
                'date' => '2024-12-05',
                'city_id' => 10, // Adjust as needed
                'type' => 'Amical',
                'score_local' => 2,
                'score_extern' => 2,
                'description' => 'Match amical avec un score équilibré.',
                'category_id' => 10, // U9
            ],
            [
                'date' => '2024-12-20',
                'city_id' => 11, // Adjust as needed
                'type' => 'Championnat',
                'score_local' => 4,
                'score_extern' => 1,
                'description' => 'Match de championnat avec une victoire convaincante.',
                'category_id' => 11, // U8
            ],
            [
                'date' => '2024-12-25',
                'city_id' => 12, // Adjust as needed
                'type' => 'Coupe',
                'score_local' => 2,
                'score_extern' => 0,
                'description' => 'Match de coupe avec une victoire sans encaisser de but.',
                'category_id' => 12, // U7
            ],
        ]);
    }
}
