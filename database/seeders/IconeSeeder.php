<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icones')->insert([
            [
                'image' => 'flaticon-023-flask',
            ],
            [
                'image' => 'flaticon-011-compass',
            ],
            [
                'image' => 'flaticon-037-idea',
            ],
            [
                'image' => 'flaticon-039-vector',
            ],
            [
                'image' => 'flaticon-039-vector',
            ],
            [
                'image' => 'flaticon-036-brainstorming',
            ],
            [
                'image' => 'flaticon-026-search',
            ],
            [
                'image' => 'flaticon-018-laptop-1',
            ],
            [
                'image' => 'flaticon-043-sketch',
            ],
            [
                'image' => 'flaticon-012-cube',
            ],
            [
                'image' => 'flaticon-002-caliper',
            ],
            [
                'image' => 'flaticon-019-coffee-cup',
            ],
            [
                'image' => 'flaticon-025-imagination',
            ],
            [
                'image' => 'flaticon-037-idea',
            ],
            [
                'image' => 'flaticon-020-creativity',
            ],
            [
                'image' => 'flaticon-008-team',
            ],
        ]);
    }
}
