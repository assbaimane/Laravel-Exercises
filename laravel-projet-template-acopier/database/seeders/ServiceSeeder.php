<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("services")->insert([
            "image" => "images/service-icon-01.png",
            "featuretitle" => "Similar Websites",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.",
        ]);
        DB::table("services")->insert([
            "image" => "images/service-icon-02.png",
            "featuretitle" => "Website Trends",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.",
        ]);
        DB::table("services")->insert([
            "image" => "images/service-icon-03.png",
            "featuretitle" => "Traffic Analysis",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.",
        ]);
        DB::table("services")->insert([
            "image" => "images/service-icon-01.png",
            "featuretitle" => "Optimizing Keywords",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.",
        ]);
        DB::table("services")->insert([
            "image" => "images/service-icon-02.png",
            "featuretitle" => "Page Optimizations",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.",
        ]);
        DB::table("services")->insert([
            "image" => "images/service-icon-03.png",
            "featuretitle" => "Deep URL Analysis",
            "description" => "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dormque laudantium.",
        ]);
    }
}
