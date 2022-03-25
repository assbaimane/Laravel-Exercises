<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FooterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("footers")->insert([
            "social1" => "facebook",
            "social2" => "twitter",
            "social3" => "linkedin",
            "copyright" => 'Copyright 2019 All Right Reserved By (Free  html Templates)'
        ]);
    }
}
