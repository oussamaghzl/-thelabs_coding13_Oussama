<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert(
            [
                [
                    'titre' => "L'histoire fantastique de Zidane",
                    'image' => 'gojo.jpg',
                    'texte' => "Il était une fois Zidane FIN.",
                    'check' => 'oui',
                    'auteur_id' => 2,
                    'created_at' => '2021-01-11 12:23:35',
                ],
                [
                    'titre' => "L'histoire fantastique d'abdelmajid",
                    'image' => 'zoro.png',
                    'texte' => "Deuxième partie de la double couverture commémorative pour les chapitres 999 et 1000 qui lui apparaît dans ce numéro.Inclus la deuxième partie d'un grand poster.Deuxième partie de la double couverture commémorative pour les chapitres 999 et 1000 qui lui apparaît dans ce numéro.Inclus la deuxième partie d'un grand poster.",
                    'check' => 'non',
                    'auteur_id' => 3,
                    'created_at' => '2021-11-15 22:32:33',
                ],
                [
                    'titre' => "L'histoire fantastique d'Oussama",
                    'image' => 'gohan.png',
                    'check' => 'oui',
                    'texte' => "Troisieme partie de la double couverture commémorative pour les chapitres 999 et 1000 qui lui apparaît dans ce numéro.Inclus la deuxième partie d'un grand poster. Deuxième partie de la double couverture commémorative pour les chapitres 999 et 1000 qui lui apparaît dans ce numéro. Inclus la deuxième partie d'un grand poster.",
                    'auteur_id' => 1,
                    'created_at' => '2022-06-25 06:32:33',
                ],
            ],
        );
    }
}
