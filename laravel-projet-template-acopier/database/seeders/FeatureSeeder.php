<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("features")->insert([
            "titres" => "Reach Out",
            "descriptions" => "This HTML5 template is based on Bootstrap 5 CSS. You are free to customize
            anything.",
            "pourcentages"=> "80%",
            "competences"=> "HTML/CSS/JS"
        ]);
        DB::table("features")->insert([
            "titres" => "Develop a Strategy",
            "descriptions" => "Lorem ipsum dolor sit ameter consectetur adipiscing li elit sed do eiusmod.",
            "pourcentages"=> "60%",
            "competences"=> "Wordpress"
        ]);
        DB::table("features")->insert([
            "titres" => "Implementation",
            "descriptions" => "If this template is useful for your website, please consider to (support us) a
            little.",
            "pourcentages"=> "90%",
            "competences"=> "Marketing"
        ]);
        DB::table("features")->insert([
            "titres" => "Analyze the result",
            "descriptions" => "Below circular progress bar animation supports those CSS values 10, 20, 30, till
            100.",
            "pourcentages"=> "70%",
            "competences"=> "Photoshop"
        ]);
    }
}
