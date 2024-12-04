<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyVolunterSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
            $userData = [
            [
                'name' => 'Saya Admin',
                'email' => 'admin@gmail.com',
                'phone' => '1234567890',
                'role' => 'admin',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
            ],
            [
                'name' => 'Saya User',
                'email' => 'user@gmail.com',
                'phone' => '0987654321',
                'role' => 'user',
                'email_verified_at' => now(),
                'password' => bcrypt('password123'),
            ],
        ];

        foreach ($userData as $key => $val) {
            User::create($val);
        }

    }
}
