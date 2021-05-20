<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create(['name' => 'super-admin']);
        Role::create(['name' => 'admin']); // Administrador: El usuario que ha dado de alta el servicio
        Role::create(['name' => 'manager']); // Responsable departamento
        Role::create(['name' => 'employee']); // Trabajador

        /*
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
            'type'         => 'R',
            'name_es'      => 'Responsable', // Administrador Departamento
        ]);

        DB::table('roles')->insert([
            'type'         => 'E',
            'name_es'      => 'Empleado',
        ]);
        */
    }
}
