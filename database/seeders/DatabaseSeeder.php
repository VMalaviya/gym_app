<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'user_first_name' => 'Admin',
            'user_last_name' => 'Master',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => '123',
            'user_phone_number' => '8888888888',
            'role' => 'Admin'
        ]);
    }
}
