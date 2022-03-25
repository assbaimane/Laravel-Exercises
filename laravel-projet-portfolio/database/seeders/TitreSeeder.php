<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Home
        DB::table("titres")->insert([
            "titre" => "Digital Marketing Landing Page 2019",
            "soustitre" => "",
            "description" => ""
        ]);
        // Features
        DB::table("titres")->insert([
            "titre" => "Better position of Business",
            "soustitre" => "Increase your client for",
            "description" => "It is a long established fact that a reader will be distracted by the readable content of a page "
        ]);
        // Portfolio
        DB::table("titres")->insert([
            "titre" => "Better position of Business",
            "soustitre" => "Previous Projects",
            "description" => "It is a long established fact that a reader will be distracted by the readable content of a
            page "
        ]);
        // Testimonial
        DB::table("titres")->insert([
            "titre" => "Testimonial",
            "soustitre" => "",
            "description" => ""
        ]);
        DB::table("titres")->insert([
            "titre" => "Contact us",
            "soustitre" => "There are many variations of passages of Lorem Ipsum available, but the ",
            "description" => ""
        ]);
        DB::table("titres")->insert([
            "titre" => "Free Multipurpose Responsive",
            "soustitre" => "Landing Page 2019",
            "description" => ""
        ]);
    }
}
