<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfessionSeeder extends Seeder
{
    public function run()
    {
        $professions = [
            ['ID_PROFESSION' => 1, 'LIB_PROFESSION' => 'Médecin'],
            ['ID_PROFESSION' => 2, 'LIB_PROFESSION' => 'Ingénieur'],
            ['ID_PROFESSION' => 3, 'LIB_PROFESSION' => 'Enseignant'],
            ['ID_PROFESSION' => 4, 'LIB_PROFESSION' => 'Avocat'],
            ['ID_PROFESSION' => 5, 'LIB_PROFESSION' => 'Infirmier/infirmière'],
            ['ID_PROFESSION' => 6, 'LIB_PROFESSION' => 'Développeur web'],
            ['ID_PROFESSION' => 7, 'LIB_PROFESSION' => 'Architecte'],
            ['ID_PROFESSION' => 8, 'LIB_PROFESSION' => 'Comptable'],
            ['ID_PROFESSION' => 9, 'LIB_PROFESSION' => 'Designer graphique'],
            ['ID_PROFESSION' => 10, 'LIB_PROFESSION' => 'Commercial'],
            ['ID_PROFESSION' => 11, 'LIB_PROFESSION' => 'Chef de projet'],
            ['ID_PROFESSION' => 12, 'LIB_PROFESSION' => 'Journaliste'],
            ['ID_PROFESSION' => 13, 'LIB_PROFESSION' => 'Artiste'],
            ['ID_PROFESSION' => 14, 'LIB_PROFESSION' => 'Photographe'],
            ['ID_PROFESSION' => 15, 'LIB_PROFESSION' => 'Psychologue'],
            ['ID_PROFESSION' => 16, 'LIB_PROFESSION' => 'Électricien'],
            ['ID_PROFESSION' => 17, 'LIB_PROFESSION' => 'Plombier'],
            ['ID_PROFESSION' => 18, 'LIB_PROFESSION' => 'Menuisier'],
            ['ID_PROFESSION' => 19, 'LIB_PROFESSION' => 'Mécanicien automobile'],
            ['ID_PROFESSION' => 20, 'LIB_PROFESSION' => 'Cuisinier/cuisinière'],
            ['ID_PROFESSION' => 21, 'LIB_PROFESSION' => 'Coiffeur/coiffeuse'],
            ['ID_PROFESSION' => 22, 'LIB_PROFESSION' => 'Gestionnaire'],
            ['ID_PROFESSION' => 23, 'LIB_PROFESSION' => 'Agent immobilier'],
            ['ID_PROFESSION' => 24, 'LIB_PROFESSION' => 'Traducteur/traductrice'],
            ['ID_PROFESSION' => 25, 'LIB_PROFESSION' => 'Sapeur-pompier'],
            ['ID_PROFESSION' => 26, 'LIB_PROFESSION' => 'Policier/policière'],
            ['ID_PROFESSION' => 27, 'LIB_PROFESSION' => 'Agriculteur/agricultrice'],
            ['ID_PROFESSION' => 28, 'LIB_PROFESSION' => 'Vendeur/vendeuse'],
            ['ID_PROFESSION' => 29, 'LIB_PROFESSION' => 'Chauffeur'],
            ['ID_PROFESSION' => 30, 'LIB_PROFESSION' => 'Consultant'],
            ['ID_PROFESSION' => 31, 'LIB_PROFESSION' => 'Agent de voyage'],
            ['ID_PROFESSION' => 32, 'LIB_PROFESSION' => 'Secrétaire'],
            ['ID_PROFESSION' => 33, 'LIB_PROFESSION' => 'Écrivain'],
            ['ID_PROFESSION' => 34, 'LIB_PROFESSION' => 'Assistant administratif'],
            ['ID_PROFESSION' => 35, 'LIB_PROFESSION' => 'Chauffeur de taxi'],
            ['ID_PROFESSION' => 36, 'LIB_PROFESSION' => 'Agent de sécurité'],
            ['ID_PROFESSION' => 37, 'LIB_PROFESSION' => 'Magistrat'],
            ['ID_PROFESSION' => 38, 'LIB_PROFESSION' => 'Musicien'],
            ['ID_PROFESSION' => 39, 'LIB_PROFESSION' => 'Agent d\'entretien'],
            ['ID_PROFESSION' => 40, 'LIB_PROFESSION' => 'Coach'],
            ['ID_PROFESSION' => 41, 'LIB_PROFESSION' => 'Assistant social'],
            ['ID_PROFESSION' => 42, 'LIB_PROFESSION' => 'Graphiste'],
            ['ID_PROFESSION' => 43, 'LIB_PROFESSION' => 'Économiste'],
            ['ID_PROFESSION' => 44, 'LIB_PROFESSION' => 'Agent artistique'],
            ['ID_PROFESSION' => 45, 'LIB_PROFESSION' => 'Conducteur de bus'],
            ['ID_PROFESSION' => 46, 'LIB_PROFESSION' => 'Animateur/animatrice'],
            ['ID_PROFESSION' => 47, 'LIB_PROFESSION' => 'Attaché de presse'],
            ['ID_PROFESSION' => 48, 'LIB_PROFESSION' => 'Expert-comptable'],
            ['ID_PROFESSION' => 49, 'LIB_PROFESSION' => 'Boulanger/boulangère'],
            ['ID_PROFESSION' => 50, 'LIB_PROFESSION' => 'Assistante maternelle'],
        ];

        DB::table('PROFESSION')->insert($professions);
    }
}
