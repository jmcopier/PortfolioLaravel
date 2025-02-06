<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('skills')->insert([
            [
                'profile_id' => 1,
                'name' => 'PHP',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'HTML/CSS',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'Javascript',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'C#',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'Python',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'SQL',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'GitHub',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'Nuxt.js',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'MSSQL',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'Netlify',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ],);
    }
}
