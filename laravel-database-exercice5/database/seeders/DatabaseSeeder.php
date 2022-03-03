<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Equipe;
use App\Models\Portfolio;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\BinaryOp\Equal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(PortfolioSeeder::class);
        $this->call(EquipeSeeder::class);
        User::factory(20)->create();
        Article::factory(30)->create();
        Portfolio::factory(10)->create();
        Equipe::factory(50)->create();
        // \App\Models\User::factory(10)->create();
    }
}