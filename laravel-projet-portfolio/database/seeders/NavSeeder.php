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
            "logo" => "images/logo.png",
            "name" => "",
            "tabs" => "Home",
            "button" => "Login",
        ]);
        DB::table("navs")->insert([
            "logo" => "",
            "name" => "",
            "tabs" => "Feature",
            "button" => "",
        ]);
        DB::table("navs")->insert([
            "logo" => "",
            "name" => "",
            "tabs" => "Portfolio",
            "button" => "",
        ]);
        DB::table("navs")->insert([
            "logo" => "",
            "name" => "",
            "tabs" => "Testimonial",
            "button" => "",
        ]);
        DB::table("navs")->insert([
            "logo" => "",
            "name" => "",
            "tabs" => "Contact",
            "button" => "",
        ]);
    }
}
