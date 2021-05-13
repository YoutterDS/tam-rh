<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Administradores/Gerentes
        DB::table('menus')->insert([
            'name_ca'      => 'Inicio',
            'slug_ca'      => Str::lower(Str::slug('Inicio')),

            'name_es'      => 'Inicio',
            'slug_es'      => Str::lower(Str::slug('Inicio')),

            'name_en'      => 'Inicio',
            'slug_en'      => Str::lower(Str::slug('Inicio')),

            'name_fr'      => 'Inicio',
            'slug_fr'      => Str::lower(Str::slug('Inicio')),


            'role_id'      => '1' // SA,
        ]);
    }
}
