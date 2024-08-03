<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cities = json_decode(file_get_contents(database_path("data/cities.json")), true);

        foreach ($cities as $city) {
            DB::table('cities')->insert([
                'state_id' => $city['state_id'],
                'ar_name' => $city['ar_name'],
                'fr_name' => $city['fr_name'],
            ]);
        }
    }
}
