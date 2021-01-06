<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            [
                'grandTitre' => 'Get your freebie template now!',
                'titre1' => 'GET IN (THE LAB) AND DISCOVER THE WORLD',
                'titre2' => 'WHAT OUR CLIENTS SAY',
                'titre3' => 'GET IN (THE LAB) AND SEE THE SERVICES',
                'titre4' => 'GET IN (THE LAB) AND MEET THE TEAM',
                "titre5" => 'Are you ready to stand out?',
            ],
        ]);
    }
}
