<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillingRecurrenciesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('billing_recurrencies')->delete();
        DB::table('billing_recurrencies')->insert(array (
            0 =>
            array (
                'code'      => 'ME',
                'name_ca'   => 'Mensual',
                'name_es'   => 'Mensual',
                'name_en'   => 'Monthly',
                'name_fr'   => 'Mensuel',
            ),
            1 =>
            array (
                'code'      => 'SE',
                'name_ca'   => 'Semestral',
                'name_es'   => 'Semestral',
                'name_en'   => 'Biannual',
                'name_fr'   => 'Semestriel',
            ),
            2 =>
            array (
                'code'      => 'AN',
                'name_ca'   => 'Anual',
                'name_es'   => 'Anual',
                'name_en'   => 'Annual',
                'name_fr'   => 'Annuel',
            ),
        ));
    }
}
