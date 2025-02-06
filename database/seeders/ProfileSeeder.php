<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            'name' => 'Jesse Copier',
            'about' => 'Hey! Mijn naam is Jesse Copier, student Software Development op het Koning Willem I College. Op dit moment zit ik in het laatste jaar van mijn opleiding en hoop ik deze dit schooljaar op een goede manier af te ronden. In mijn vrije tijd vind ik het leuk om films te kijken, boeken te lezen en muziek te luisteren.',
            'github' => 'https://github.com/jmcopier',
            'linkedin' => 'https://www.linkedin.com/in/jesse-copier-519b1b273/',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
