<?php

namespace Database\Seeders;

use App\Models\Equipe;
use App\Models\Joueur;
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
        Equipe::factory(5)->create();
        Joueur::factory(45)->create();
        $this->call(
            RoleSeeder::class
        );
    }
}
