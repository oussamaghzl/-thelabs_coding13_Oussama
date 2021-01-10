<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('footers')->insert([
            'copyright' => '2017 All rights reserved. Designed by ',
            'name' => 'Colorlib',
            'lien' => 'https://colorlib.com',

        ]);
    }
}
