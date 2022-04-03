<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("roles")->insert([
            'role' => 'Avant'
        ]);
        DB::table("roles")->insert([
            'role' => 'Arrière'
        ]);
        DB::table("roles")->insert([
            'role' => 'Central'
        ]);
        DB::table("roles")->insert([
            'role' => 'Remplaçant'
        ]);
    }
}
