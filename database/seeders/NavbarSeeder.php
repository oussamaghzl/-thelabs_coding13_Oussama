<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavbarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navbars')->insert([
            'page1' => 'Accueil',
            'page2' => 'Services',
            'page3' => 'Blog',
            'page4' => 'Contact',
        ]);
    }
}
