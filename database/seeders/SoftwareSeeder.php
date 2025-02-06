<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoftwareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('software')->insert([
            [
                'project_id' => 1,
                'name' => 'Vue (Nuxt)',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'project_id' => 1,
                'name' => 'Javascript',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'project_id' => 1,
                'name' => 'Typescript',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'project_id' => 1,
                'name' => 'Tailwind CSS',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
