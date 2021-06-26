<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PackagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('packages')->insert([
            'name_ca'      => 'BASIC',
            'name_es'      => 'BASIC',
            'name_en'      => 'BASIC',
            'name_fr'      => 'BASIC',

            'code'         => 'BAS',
            'price'        => 3.99,
            'special'      => 'Y'
        ]);

        DB::table('packages')->insert([
            'name_ca'      => 'BUSINESS',
            'name_es'      => 'BUSINESS',
            'name_en'      => 'BUSINESS',
            'name_fr'      => 'BUSINESS',

            'code'         => 'BUS',
            'price'        => 6.99,
            'special'      => 'Y'
        ]);

        DB::table('packages')->insert([
            'name_ca'      => 'EXCELLENCE',
            'name_es'      => 'EXCELLENCE',
            'name_en'      => 'EXCELLENCE',
            'name_fr'      => 'EXCELLENCE',

            'code'         => 'EXC',
            'price'        => 9.99
        ]);

        DB::table('packages')->insert([
            'name_ca'      => 'PREMIUM',
            'name_es'      => 'PREMIUM',
            'name_en'      => 'PREMIUM',
            'name_fr'      => 'PREMIUM',

            'code'         => 'PRE',
            'price'        => 24.99
        ]);

        DB::table('packages')->insert([
            'name_ca'      => 'DEMO',
            'name_es'      => 'DEMO',
            'name_en'      => 'DEMO',
            'name_fr'      => 'DEMO',

            'code'         => 'DEM',
            'price'        => 0
        ]);
    }
}
