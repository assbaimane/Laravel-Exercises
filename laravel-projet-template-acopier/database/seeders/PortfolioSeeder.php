<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PortfolioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("portfolios")->insert([
            "image" => "images/portfolio-01.jpg",
            "titreprojet" => "Awesome Project 101",
            "categorieprojet" => "Marketing",
        ]);
        DB::table("portfolios")->insert([
            "image" => "images/portfolio-02.jpg",
            "titreprojet" => "Awesome Project 102",
            "categorieprojet" => "Branding",
        ]);
        DB::table("portfolios")->insert([
            "image" => "images/portfolio-03.jpg",
            "titreprojet" => "Awesome Project 103",
            "categorieprojet" => "Consulting",
        ]);
        DB::table("portfolios")->insert([
            "image" => "images/portfolio-04.jpg",
            "titreprojet" => "Awesome Project 104",
            "categorieprojet" => "Artwork",
        ]);
        DB::table("portfolios")->insert([
            "image" => "images/portfolio-05.jpg",
            "titreprojet" => "Awesome Project 105",
            "categorieprojet" => "Communication",
        ]);
        DB::table("portfolios")->insert([
            "image" => "images/portfolio-06.jpg",
            "titreprojet" => "Awesome Project 106",
            "categorieprojet" => "Social Media",
        ]);
        DB::table("portfolios")->insert([
            "image" => "images/portfolio-03.jpg",
            "titreprojet" => "Awesome Project 107",
            "categorieprojet" => "Advertising",
        ]);
        DB::table("portfolios")->insert([
            "image" => "images/portfolio-04.jpg",
            "titreprojet" => "Awesome Project 108",
            "categorieprojet" => "Web Design",
        ]);
    }
}
