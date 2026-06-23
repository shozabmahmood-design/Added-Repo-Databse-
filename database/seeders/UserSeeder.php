<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Admin User
        User::updateOrCreate(
            ['email' => 'admin@carexllc.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('password'),
                'user_type' => 2,
            ]
        );

        // Create Regular User
        User::updateOrCreate(
            ['email' => 'user@carexllc.com'],
            [
                'name' => 'Regular User',
                'password' => Hash::make('password'),
                'user_type' => 0,
            ]
        );
    }
}
