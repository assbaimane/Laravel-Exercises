<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Database\Factories\RolesFactory;
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
        User::factory(20)->create();
        Role::factory(4)->create();
    }
}
