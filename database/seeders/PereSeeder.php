<?php
namespace Database\Seeders;

use App\Models\Pere;
use App\Models\Profession;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PereSeeder extends Seeder
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
            Pere::create([
                'id_profession' => $faker->randomElement($professions),
                'nom_pere' => $faker->lastName,
                'prenom_pere' => $faker->firstName,
                'date_naissance_pere' => $faker->date,
            ]);
        }
    }
}
