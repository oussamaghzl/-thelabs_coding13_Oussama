<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsletterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('newsletters')->insert([
            [
                'email' => "bencleyhd@gmail.com",
            ],
            [
                'email' => "admin@gmail.com",
            ],
            [
                'email' => "webmaster@gmail.com",
            ],
            [
                'email' => "redacteur@gmail.com",
            ],
            [
                'email' => "membre@gmail.com",
            ],
        ]);
    }
}
