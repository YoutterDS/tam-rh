<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoinTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coins')->delete();
        DB::table('coins')->insert(array (
            0 =>
            array (
                'code' => 'EUR',
                'currency' => 'Euro',
                'symbol' => '€',
            ),
        ));
    }
}
