<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CoinFormatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('coin_formats')->delete();
        DB::table('coin_formats')->insert(array (
            0 =>
            array (
                'code' => 'ES',
                'code_format' => 'spain-euro',
                'date_format' => 'd/m/Y',
                'coin_format' => '1.234,56 €',
            ),
        ));
    }
}
