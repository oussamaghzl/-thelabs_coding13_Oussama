<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'titre' => 'Main Office',
            'rue' => 'C/ Libertad, 34',
            'codepostal' => '05200 Arévalo',
            'telephone' => '0034 37483 2445 322',
            'email' => 'hello@company.com',
        ]);
    }
}
