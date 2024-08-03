<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Seed the users table with roles.
     *
     * @return void
     */
    public function run()
    {
        // Ensure roles exist
        $roles = [
            'SuperAdmin',
            'CategoryAdmin',
            'FootballSchoolAdmin'
        ];

        foreach ($roles as $role) {
            if (!Role::where('name', $role)->exists()) {
                Role::create(['name' => $role]);
            }
        }

        // Create users and assign roles
        $users = [
            [
                'username' => 'admin',
                'password' => Hash::make('password123'),
                'email' => 'admin@example.com',
                'phone' => '0780476367',
                'address' => '123 Admin St, Admin City',
                'roles' => ['SuperAdmin'],
                'image' =>'images/admin.jpg'
            ],
            [
                'username' => 'catadmin',
                'password' => Hash::make('password123'),
                'email' => 'catadmin@example.com',
                'phone' => '0780476366',
                'address' => '456 Category Ave, Category City',
                'roles' => ['CategoryAdmin'],
                'image' =>'images/admin.jpg'
            ],
            [
                'username' => 'schooladmin',
                'password' => Hash::make('password123'),
                'email' => 'schooladmin@example.com',
                'phone' => '0780476365',
                'address' => '789 School Rd, School Town',
                'roles' => ['FootballSchoolAdmin'],
                'image' =>'images/admin.jpg'
            ],
        ];

        foreach ($users as $userData) {
            $user = User::create([
                'username' => $userData['username'],
                'password' => $userData['password'],
                'email' => $userData['email'],
                'phone' => $userData['phone'],
                'address' => $userData['address'],
                'image' => $userData['image'],
            ]);

            $user->assignRole($userData['roles']);
        }
    }
}
