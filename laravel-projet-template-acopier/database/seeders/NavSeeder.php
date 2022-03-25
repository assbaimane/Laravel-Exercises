<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("navs")->insert([
            "name" => "SEO Dream",
            "logo" => "images/logo-icon.png",
            "tabs" => "Home",
            "button" => "Login",
        ]);
        DB::table("navs")->insert([
            "name" => "",
            "logo" => "",
            "tabs" => "Features",
            "button" => "",
        ]);
        DB::table("navs")->insert([
            "name" => "",
            "logo" => "",
            "tabs" => "About us",
            "button" => "",
        ]);
        DB::table("navs")->insert([
            "name" => "",
            "logo" => "",
            "tabs" => "Services",
            "button" => "",
        ]);
        DB::table("navs")->insert([
            "name" => "",
            "logo" => "",
            "tabs" => "Portfolio",
            "button" => "",
        ]);
        DB::table("navs")->insert([
            "name" => "",
            "logo" => "",
            "tabs" => "Contact",
            "button" => "",
        ]);
    }
}
