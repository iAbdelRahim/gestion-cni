<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    public function run()
    {
        $professions = [
            ['ID_PROFFESSION' => 1, 'LIB_PROFESSION' => 'Médecin'],
            ['ID_PROFFESSION' => 2, 'LIB_PROFESSION' => 'Ingénieur'],
            ['ID_PROFFESSION' => 3, 'LIB_PROFESSION' => 'Enseignant'],
            ['ID_PROFFESSION' => 4, 'LIB_PROFESSION' => 'Avocat'],
            ['ID_PROFFESSION' => 5, 'LIB_PROFESSION' => 'Infirmier/infirmière'],
            ['ID_PROFFESSION' => 6, 'LIB_PROFESSION' => 'Développeur web'],
            ['ID_PROFFESSION' => 7, 'LIB_PROFESSION' => 'Architecte'],
            ['ID_PROFFESSION' => 8, 'LIB_PROFESSION' => 'Comptable'],
            ['ID_PROFFESSION' => 9, 'LIB_PROFESSION' => 'Designer graphique'],
            ['ID_PROFFESSION' => 10, 'LIB_PROFESSION' => 'Commercial'],
            ['ID_PROFFESSION' => 11, 'LIB_PROFESSION' => 'Chef de projet'],
            ['ID_PROFFESSION' => 12, 'LIB_PROFESSION' => 'Journaliste'],
            ['ID_PROFFESSION' => 13, 'LIB_PROFESSION' => 'Artiste'],
            ['ID_PROFFESSION' => 14, 'LIB_PROFESSION' => 'Photographe'],
            ['ID_PROFFESSION' => 15, 'LIB_PROFESSION' => 'Psychologue'],
            ['ID_PROFFESSION' => 16, 'LIB_PROFESSION' => 'Électricien'],
            ['ID_PROFFESSION' => 17, 'LIB_PROFESSION' => 'Plombier'],
            ['ID_PROFFESSION' => 18, 'LIB_PROFESSION' => 'Menuisier'],
            ['ID_PROFFESSION' => 19, 'LIB_PROFESSION' => 'Mécanicien automobile'],
            ['ID_PROFFESSION' => 20, 'LIB_PROFESSION' => 'Cuisinier/cuisinière'],
            ['ID_PROFFESSION' => 21, 'LIB_PROFESSION' => 'Coiffeur/coiffeuse'],
            ['ID_PROFFESSION' => 22, 'LIB_PROFESSION' => 'Gestionnaire'],
            ['ID_PROFFESSION' => 23, 'LIB_PROFESSION' => 'Agent immobilier'],
            ['ID_PROFFESSION' => 24, 'LIB_PROFESSION' => 'Traducteur/traductrice'],
            ['ID_PROFFESSION' => 25, 'LIB_PROFESSION' => 'Sapeur-pompier'],
            ['ID_PROFFESSION' => 26, 'LIB_PROFESSION' => 'Policier/policière'],
            ['ID_PROFFESSION' => 27, 'LIB_PROFESSION' => 'Agriculteur/agricultrice'],
            ['ID_PROFFESSION' => 28, 'LIB_PROFESSION' => 'Vendeur/vendeuse'],
            ['ID_PROFFESSION' => 29, 'LIB_PROFESSION' => 'Chauffeur'],
            ['ID_PROFFESSION' => 30, 'LIB_PROFESSION' => 'Consultant'],
            ['ID_PROFFESSION' => 31, 'LIB_PROFESSION' => 'Agent de voyage'],
            ['ID_PROFFESSION' => 32, 'LIB_PROFESSION' => 'Secrétaire'],
            ['ID_PROFFESSION' => 33, 'LIB_PROFESSION' => 'Écrivain'],
            ['ID_PROFFESSION' => 34, 'LIB_PROFESSION' => 'Assistant administratif'],
            ['ID_PROFFESSION' => 35, 'LIB_PROFESSION' => 'Chauffeur de taxi'],
            ['ID_PROFFESSION' => 36, 'LIB_PROFESSION' => 'Agent de sécurité'],
            ['ID_PROFFESSION' => 37, 'LIB_PROFESSION' => 'Magistrat'],
            ['ID_PROFFESSION' => 38, 'LIB_PROFESSION' => 'Musicien'],
            ['ID_PROFFESSION' => 39, 'LIB_PROFESSION' => 'Agent d\'entretien'],
            ['ID_PROFFESSION' => 40, 'LIB_PROFESSION' => 'Coach'],
            ['ID_PROFFESSION' => 41, 'LIB_PROFESSION' => 'Assistant social'],
            ['ID_PROFFESSION' => 42, 'LIB_PROFESSION' => 'Graphiste'],
            ['ID_PROFFESSION' => 43, 'LIB_PROFESSION' => 'Économiste'],
            ['ID_PROFFESSION' => 44, 'LIB_PROFESSION' => 'Agent artistique'],
            ['ID_PROFFESSION' => 45, 'LIB_PROFESSION' => 'Conducteur de bus'],
            ['ID_PROFFESSION' => 46, 'LIB_PROFESSION' => 'Animateur/animatrice'],
            ['ID_PROFFESSION' => 47, 'LIB_PROFESSION' => 'Attaché de presse'],
            ['ID_PROFFESSION' => 48, 'LIB_PROFESSION' => 'Expert-comptable'],
            ['ID_PROFFESSION' => 49, 'LIB_PROFESSION' => 'Boulanger/boulangère'],
            ['ID_PROFFESSION' => 50, 'LIB_PROFESSION' => 'Assistante maternelle'],
        ];

        DB::table('PROFFESSION')->insert($professions);
    }
}
