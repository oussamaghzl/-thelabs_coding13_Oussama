<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            [
                'name' => 'Ghezal Oussama',
                'photo' => '/team/3.jpg',
                'fonction' => 'CEO Company',
            ],
            [
                "name" => 'Zimdine Zidane',
                'photo' => '/team/2.jpg',
                'fonction' => 'PROJECT MANAGER',
            ],
            [
                'name' => 'Taouil Abdelmajid',
                'photo' => '/team/1.jpg',
                'fonction' => 'JUNIOR DEVELOPER',
            ],
            [
                'name' => 'Dari Kawtar',
                'photo' => '/team/2.jpg',
                'fonction' => 'DIGITAL DESIGNER',
            ],
        ]);
    }
}