<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            TitreSeeder::class,
            NavSeeder::class,
            HomeSeeder::class,
            FeatureSeeder::class,
            TestimonialSeeder::class,
            PortfolioSeeder::class,
            ContactSeeder::class,
            FooterSeeder::class
        ]);
    }
}
