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
        DB::table("titres")->insert([
            "titre" => "SEO &amp; Digital Marketing Agency",
            "soustitre" => "",
        ]);
        DB::table("titres")->insert([
            "titre" => "Top [marketing] agency &amp; consult your website (with us)",
            "soustitre" => "ABOUT US",
        ]);
        DB::table("titres")->insert([
            "titre" => "Discover What We Do & (Offer) To Our [Clients]",
            "soustitre" => "OUR SERVICES",
        ]);
        DB::table("titres")->insert([
            "titre" => "Discover Our Recent [Projects] And (Showcases)",
            "soustitre" => "OUR PORTFOLIO",
        ]);
        DB::table("titres")->insert([
            "titre" => "Fill Out The Form Below To (Get) In [Touch] With Us",
            "soustitre" => "CONTACT US",
        ]);
    }
}
