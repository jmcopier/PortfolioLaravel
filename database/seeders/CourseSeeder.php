<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('courses')->insert([
            [
                'profile_id' => 1,
                'name' => 'HAVO',
                'school' => 'Gomarus Scholengemeenschap',
                'period' => '2015 - 2020',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'Informatica',
                'school' => 'Avans Hogeschool',
                'period' => '2021 - 2022',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'profile_id' => 1,
                'name' => 'Software Development',
                'school' => 'Koning Willem I College',
                'period' => '2022 - Heden',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
