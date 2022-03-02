<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table("articles")->insert([
            "nom"=>"Assbai",
            "texte"=>"Aujourd'hui, nous avons vu comment utiliser les seeders. Voici mes notes de cours :  https://imane-assbai.notion.site/MYSQL-9a94d14cdde14ce686118ce8c162c873",
            "cote"=>"19.5",
            "created_at"=>now()
        ]);
    }
}
