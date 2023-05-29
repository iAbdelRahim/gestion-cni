<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SexeSeeder extends Seeder
{
    public function run()
    {
        $sexes = [
            ['ID_SEXE' => 'M', 'LIBELLE_SEXE' => 'Masculin'],
            ['ID_SEXE' => 'F', 'LIBELLE_SEXE' => 'Féminin'],
        ];

        DB::table('SEXE')->insert($sexes);
    }
}
