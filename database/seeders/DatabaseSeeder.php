<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //\App\Models\User::factory(10)->create();
        DB::table('tbl_schools')->insert([
            'school_id' => 304104,
            'school_name' => 'Agusan National High School',
        ]);

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
             'u_school_id' => 304104,
             'remember_token' => '',
             'created_at' => '2023-05-15 01:44:14',
             'updated_at' => '2023-05-15 01:44:14',
         ]);
    }
}
