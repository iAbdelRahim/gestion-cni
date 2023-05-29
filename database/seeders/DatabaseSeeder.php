<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use MereSeeder;
use PaysSeeder;
use PereSeeder;
use SexeSeeder;
use UserSeeder;
// use EnrolerSeeder;
use ProfessionSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(SexeSeeder::class);
        $this->call(PaysSeeder::class);
        $this->call(ProfessionSeeder::class);
        $this->call(PereSeeder::class);
        $this->call(MereSeeder::class);
        // $this->call(EnrolerSeeder::class);
        $this->call(UserSeeder::class);
    }
}
