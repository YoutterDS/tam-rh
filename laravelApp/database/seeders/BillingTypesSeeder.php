<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillingTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('billing_types')->delete();
        DB::table('billing_types')->insert(array (
            0 =>
            array (
                'code'      => 'TC',
                'name_ca'   => 'Targeta de crèdit',
                'name_es'   => 'Tarjeta de crédito',
                'name_en'   => 'Credit card',
                'name_fr'   => 'Carte de crédit',
            ),
            1 =>
            array (
                'code'      => 'DB',
                'name_ca'   => 'Domiciliació bancaria',
                'name_es'   => 'Domiciliación bancaria',
                'name_en'   => 'Direct debit',
                'name_fr'   => 'Prélèvement automatique',
            ),
        ));
    }
}
