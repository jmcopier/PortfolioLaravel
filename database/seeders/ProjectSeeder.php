<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            'profile_id' => 1,
            'name' => 'Portfolio',
            'description' => 'De portfolio website waar je nu op zit! Gemaakt met behulp van het framework Nuxt en Tailwind CSS.',
            'github' => 'https://github.com/jmcopier/Portfolio',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
