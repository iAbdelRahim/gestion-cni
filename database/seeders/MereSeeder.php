<?php

use App\Models\Mere;
use App\Models\Profession;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class MereSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        $professions = Profession::all();

        foreach (range(1, 50) as $index) {
            Mere::create([
                'ID_PROFFESSION' => $faker->randomElement($professions)->ID_PROFFESSION,
                'NOM_MERE' => $faker->lastName,
                'PRENOM_MERE' => $faker->firstNameFemale,
                'DATE_NAISSANCE_MERE' => $faker->date(),
            ]);
        }
    }
}
