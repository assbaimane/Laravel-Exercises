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
            "name" => "Article 1",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, labore deleniti nulla odio itaque cupiditate neque. Animi quae adipisci voluptate"
        ]);
        DB::table("articles")->insert([
            "name" => "Article 2",
            "description" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iusto, labore deleniti nulla odio itaque cupiditate neque. Animi quae adipisci voluptate"
        ]);
    }
}
