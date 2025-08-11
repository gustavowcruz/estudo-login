<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Bob Pereira Bueno',
            'email' => 'bob@example.com',
            'password' => Hash::make('secret'),
        ]);

        User::factory()->create([
            'name' => 'Sarah Pattel',
            'email' => 'sarah@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
