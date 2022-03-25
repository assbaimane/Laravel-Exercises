<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("homes")->insert([
            "conditions" => "Agency Status",
            "values" => "Ready to Work",
            "button" => "Contact Us",
            "img"=> "images/banner-right-image.png"
        ]);
        DB::table("homes")->insert([
            "conditions" => "Price",
            "values" => "$720/Month",
            "button" => "",
            "img"=>""
        ]);
        DB::table("homes")->insert([
            "conditions" => "Schedule",
            "values" => "$450/Meeting",
            "button" => "",
            "img"=>""
        ]);
    }
}
