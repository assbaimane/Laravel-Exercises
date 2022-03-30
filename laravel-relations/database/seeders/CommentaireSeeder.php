<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table("commentaires")->insert([
            "name" => "Commentaire 1",
            "contenu" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, labore deleniti nulla odio itaque cupiditate neque. Animi quae adipisci voluptate",
            "article_id" => 1
        ]);

        DB::table("commentaires")->insert([
            "name" => "Commentaire 2",
            "contenu" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, labore deleniti nulla odio itaque cupiditate neque. Animi quae adipisci voluptate",
            "article_id" => 1
        ]);
        DB::table("commentaires")->insert([
            "name" => "Commentaire 3",
            "contenu" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, labore deleniti nulla odio itaque cupiditate neque. Animi quae adipisci voluptate",
            "article_id" => 2
        ]);
    }
}
