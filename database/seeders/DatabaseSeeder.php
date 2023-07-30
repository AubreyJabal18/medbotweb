<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'last_name' => 'Medbot',
            'first_name' => 'Admin',
            'type' => 'admin',
            'sex' => 'female',
            'birthday' => '2001-09-18',
            'municipality' => 'Boac',
            'barangay' => 'Ihatub',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123')
        ]);
    }
}
