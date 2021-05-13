<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
            'type'         => 'OP',
            'name_es'      => 'Operativo',
        ]);

        DB::table('permissions')->insert([
            'type'         => 'CO',
            'name_es'      => 'Consultivo',
        ]);
    }
}
