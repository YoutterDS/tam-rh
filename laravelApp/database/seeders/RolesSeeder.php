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
    }
}
