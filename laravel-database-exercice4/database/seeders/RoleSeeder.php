<?php

namespace Database\Seeders;

use App\Models\Role;
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
        $roles = Role::factory()->count(10)->create();
        // DB::table("roles")->insert([
        //     "nom" => "Admin",
        //     "numero" => "1",
        // ]);
        // DB::table("roles")->insert([
        //     "nom" => "Boss",
        //     "numero" => "5",
        // ]);
        // DB::table("roles")->insert([
        //     "nom" => "Soufifre",
        //     "numero" => "10",
        // ]);
        // DB::table("roles")->insert([
        //     "nom" => "Secretaire",
        //     "numero" => "8",
        // ]);
        // DB::table("roles")->insert([
        //     "nom" => "client",
        //     "numero" => "1000",
        // ]);
    }
}
