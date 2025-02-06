<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            'profile_id' => 1,
            'function' => 'Stagiair softwareontwikkelaar',
            'company' => 'Holding the Drones',
            'period' => '2022 - 2023',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
