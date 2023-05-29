<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnrolerSeeder extends Seeder
{
    public function run()
    {
        DB::table('ENROLER')->insert([
            // Ajoutez ici les données de la table ENROLER
        ]);
    }
}
