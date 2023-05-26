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
        //\App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
             'name' => 'Administrator',
             'email' => '304104@r10.deped.gov.ph',
             'email_verified_at' => '2023-05-15 01:48:21',
             'password' => '$2y$10$9TrsdYDvLKOUo4zaSUj6cO.6XFJiWLBFbs9TnO34ki/luJ9kEnm76',
             'role' => 1,
             'birthdate' => '1998-02-22',
             'gender' => 'male',
             'position' => 'Special Science Teacher 1',
             'hs' => 2,
             'remember_token' => '',
             'created_at' => '2023-05-15 01:44:14',
             'updated_at' => '2023-05-15 01:44:14',
         ]);
    }
}
