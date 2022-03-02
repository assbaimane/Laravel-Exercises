<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EleveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("eleves")->insert([
            "nom" => "Assbai",
            "PREnom" => "Imane",
            "email" => "assbaimane@hotmail.com",
            "adresse" => "Anderlecht 1070",
            "birthday" => "1998/09/19",
            "adresseIp" => "12.PAS.ABU.30.SER",
            "created_at"=> now()
            ]);
    }
}
