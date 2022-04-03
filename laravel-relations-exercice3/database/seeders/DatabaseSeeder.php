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
        $this->call(
            RoleSeeder::class
        );
        Equipe::factory(6)->create();
        Joueur::factory(48)->create();
    }
}
