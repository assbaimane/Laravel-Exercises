<?php

namespace Database\Seeders;

use App\Models\Commentaire;
use App\Models\Role;
use App\Models\User;
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
        $this->call(UserSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(CommentaireSeeder::class);
        // \App\Models\User::factory(10)->create();
        User::factory(10)->create();
        Role::factory(10)->create();
        Commentaire::factory(10)->create();
    }
}
