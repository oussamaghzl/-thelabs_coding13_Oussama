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
                'user_id' => '1',
                'fonction' => 'CEO Company',
            ],
            [
                'user_id' => '2',
                'fonction' => 'PROJECT MANAGER',
            ],
            [
                'user_id' => '3',
                'fonction' => 'JUNIOR DEVELOPER',
            ],
            [
                'user_id' => '4',
                'fonction' => 'DIGITAL DESIGNER',
            ],
        ]);
        
    }
}