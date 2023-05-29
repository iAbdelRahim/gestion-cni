<?php
use App\Models\Pere;
use App\Models\Profession;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class PereSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $professions = Profession::all();

        foreach (range(1, 50) as $index) {
            Pere::create([
                'ID_PROFFESSION' => $faker->randomElement($professions)->ID_PROFFESSION,
                'NOM_PERE' => $faker->lastName,
                'PRENOM_PERE' => $faker->firstNameMale,
                'DATE_NAISSANCE_PERE' => $faker->date(),
            ]);
        }
    }
}
