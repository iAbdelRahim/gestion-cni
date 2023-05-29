<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PaysSeeder extends Seeder
{
    public function run()
    {
        $pays = [
            ['ID_PAYS' => 'BF', 'LIB_PAYS' => 'Burkina Faso'],
            ['ID_PAYS' => 'CI', 'LIB_PAYS' => 'Côte d\'Ivoire'],
            ['ID_PAYS' => 'GH', 'LIB_PAYS' => 'Ghana'],
            ['ID_PAYS' => 'GN', 'LIB_PAYS' => 'Guinée'],
            ['ID_PAYS' => 'GM', 'LIB_PAYS' => 'Gambie'],
            ['ID_PAYS' => 'GW', 'LIB_PAYS' => 'Guinée-Bissau'],
            ['ID_PAYS' => 'LR', 'LIB_PAYS' => 'Libéria'],
            ['ID_PAYS' => 'ML', 'LIB_PAYS' => 'Mali'],
            ['ID_PAYS' => 'NE', 'LIB_PAYS' => 'Niger'],
            ['ID_PAYS' => 'NG', 'LIB_PAYS' => 'Nigeria'],
            ['ID_PAYS' => 'SN', 'LIB_PAYS' => 'Sénégal'],
            ['ID_PAYS' => 'SL', 'LIB_PAYS' => 'Sierra Leone'],
            ['ID_PAYS' => 'TG', 'LIB_PAYS' => 'Togo'],
        ];

        DB::table('PAYS')->insert($pays);
    }
}
