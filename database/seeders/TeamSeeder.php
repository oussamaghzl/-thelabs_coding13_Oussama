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
                'photo' => '/avatar/01.jpg',
                'fonction' => 'CEO Company',
            ],
            [
                "name" => 'Zimdine Zidane',
                'photo' => '/avatar/02.jpg',
                'fonction' => 'PROJECT MANAGER',
            ],
            [
                'name' => 'Taouil Abdelmajid',
                'photo' => '/avatar/03.jpg',
                'fonction' => 'JUNIOR DEVELOPER',
            ],
            [
                'name' => 'Dari Kawtar',
                'photo' => '/avatar/02.jpg',
                'fonction' => 'DIGITAL DESIGNER',
            ],
        ]);
    }
}