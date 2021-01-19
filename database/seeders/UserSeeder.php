<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Oussama',
                'email' => 'admin@gmail.com',
                "pdp" => "avatar/01.jpg",
                'password' => Hash::make('uncharted'),
                'role_id' => '1',
            ],
            [
                'name' => 'Zidane',
                'email' => 'webmaster@gmail.com',
                "pdp" => "avatar/goku.png",
                'password' => Hash::make('uncharted'),
                'role_id' => '3',
            ],
            [
                'name' => 'Abdelmajid',
                'email' => 'redacteur@gmail.com',
                "pdp" => "avatar/02.jpg",
                'password' => Hash::make('uncharted'),
                'role_id' => '2',
            ],
            [
                'name' => 'Nanami',
                'email' => 'membre@gmail.com',
                "pdp" => "avatar/03.jpg",
                'password' => Hash::make('uncharted'),
                'role_id' => '4',
            ]
        ]);
    }
}
