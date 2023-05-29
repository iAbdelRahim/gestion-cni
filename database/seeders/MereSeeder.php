<?php
namespace Database\Seeders;

use App\Models\Mere;
use App\Models\Profession;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MereSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $professions = Profession::pluck('id_profession')->toArray();

        foreach (range(1, 50) as $index) {
            Mere::create([
                'id_profession' => $faker->randomElement($professions),
                'nom_mere' => $faker->lastName,
                'prenom_mere' => $faker->firstName,
                'date_naissance_mere' => $faker->date,
            ]);
        }
    }
}
