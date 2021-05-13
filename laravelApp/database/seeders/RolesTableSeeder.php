<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'type'         => 'SA',
            'name_es'      => 'SuperAdministrador', // Zeus: Acceso a todas las empresas
        ]); // Este usuario dispondrá de un panel de acceso previo, con un listado de todas las empresas.
            // Al acceder a una de éstas, será logado automáticamente como el Administrador de la empresa seleccionada.
            // Se le mostrará un botón de "Volver al área de SuperAdministración"

        DB::table('roles')->insert([
            'type'         => 'A',
            'name_es'      => 'Administrador', // Administrador: Acceso a la Empresa
        ]);

        DB::table('roles')->insert([
            'type'         => 'G',
            'name_es'      => 'Gerente', // Administrador Oficina
        ]);

        DB::table('roles')->insert([
            'type'         => 'JD',
            'name_es'      => 'Jefe Departamento', // Administrador Departamento
        ]);

        DB::table('roles')->insert([
            'type'         => 'E',
            'name_es'      => 'Empleado',
        ]);

    }
}
