<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'icone_id' => '1',
                'titre' => 'Get in the lab',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '2',
                'titre' => 'Projects online',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '3',
                'titre' => 'SMART MARKETING',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '4',
                'titre' => 'Social Media',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '5',
                'titre' => 'Social Media',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '6',
                'titre' => 'Brainstorming',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '7',
                'titre' => 'Documented',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '8',
                'titre' => 'Responsive',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '9',
                'titre' => 'Retina ready',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '10',
                'titre' => 'Ultra modern',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '11',
                'titre' => 'et in the lab',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '12',
                'titre' => 'Projects online',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '13',
                'titre' => 'SMART MARKETING',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '14',
                'titre' => 'Get in the lab',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '15',
                'titre' => 'Projects online',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
            [
                'icone_id' => '16',
                'titre' => 'SMART MARKETING',
                'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            ],
        ]);
       
    }
}
