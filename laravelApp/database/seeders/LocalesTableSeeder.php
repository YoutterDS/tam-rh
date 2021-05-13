<?php

use Illuminate\Database\Seeder;

class LocalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('locales')->delete();
        \DB::table('locales')->insert(array (
            0 =>
                array (
                    'code'          => 'es',
                    'code_string'   => 'es_ES',
                    'name_es'       => 'Español',
                    'name_ca'       => 'Español',
                    'name_en'       => 'Español',
                    'name_fr'       => 'Español',
                ),
            1 =>
                array (
                    'code'          => 'ca',
                    'code_string'   => 'ca_ES',
                    'name_es'       => 'Català',
                    'name_ca'       => 'Català',
                    'name_en'       => 'Català',
                    'name_fr'       => 'Català',
                ),
            2 =>
                array (
                    'code'          => 'en',
                    'code_string'   => 'en_EN',
                    'name_es'       => 'English',
                    'name_ca'       => 'English',
                    'name_en'       => 'English',
                    'name_fr'       => 'English',
                ),
        ));
    }
}
