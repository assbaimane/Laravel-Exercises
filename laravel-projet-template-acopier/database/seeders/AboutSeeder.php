<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("abouts")->insert([
            "image" => "images/about-left-image.png",
            "chiffres" => "750+",
            "exploits" => "Projects Finished",
            "description" => "(SEO Dream) is free digital marketing CSS template provided by TemplateMo website. You are allowed to use this template for your business websites. Please DO NOT redistribute this template ZIP file on any Free CSS collection websites. You may contact us for more information. Thank you.",
            "bouton" => "Discover Company"
        ]);
        DB::table("abouts")->insert([
            "image" => "",
            "chiffres" => "340+",
            "exploits" => "Happy Clients",
            "description" => "",
            "bouton" => ""
        ]);
        DB::table("abouts")->insert([
            "image" => "",
            "chiffres" => "128+",
            "exploits" => "Awards",
            "description" => "",
            "bouton" => ""
        ]);
    }
}
