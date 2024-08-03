<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $states = json_decode(file_get_contents(database_path("data/states.json")), true);

        foreach ($states as $wilaya) {
            DB::table('states')->insert([
                'id' => $wilaya['id'],
                'ar_name' => $wilaya['ar_name'],
                'fr_name' => $wilaya['fr_name'],
            ]);
        }
    }
}
