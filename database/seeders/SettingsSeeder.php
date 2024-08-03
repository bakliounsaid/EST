<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        setting([

                "logo" => 'images/logo.png',
                "icon" => 'images/logo.png',
                "name" => "Etoile Sportif de Taourga",
                "email" => "email@exemple.com",
                "currency" => "DZD",
                "phone" => "0791000000",
                "address" => "your address , here",
                "facebook" => "https://www.facebook.com/",
                "instagram" => "https://www.instagram.com/",
        ]);
        setting()->save();
    }
}
