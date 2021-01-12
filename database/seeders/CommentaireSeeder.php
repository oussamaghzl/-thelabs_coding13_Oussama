<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert(
            [
                [
                    'texte'=>"Zidane est nul meme si c'est rien avoir avec l'article",
                    'user_id' => 1,
                    'article_id' => 2,
                    
                ],
                [
                    'texte'=>"Abdelmajid croit qu'il est plus fort que Oussama il se met un doigt dans l'oeil !",
                    'user_id' => 3,
                    'article_id' => 2,
                ],
                [
                    'texte'=>"Maxime croit qu'il est plus fort que Oussama il se met un doigt dans l'oeil !",
                    'user_id' => 1,
                    'article_id' => 2,
                ],
                [
                    'texte'=>"Zidane croit qu'il est plus fort que Oussama il se met un doigt dans l'oeil !",
                    'user_id' => 3,
                    'article_id' => 3,
                ],
            ],
        );
    }
}
