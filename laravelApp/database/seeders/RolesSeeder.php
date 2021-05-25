<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
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
        // Permissions
            // Company
            // Permission::create(['name' => 'see company']);
            // Permission::create(['name' => 'create company']);
            Permission::create(['name' => 'edit company']);
            // Permission::create(['name' => 'delete company']);

            // Offices
            // Permission::create(['name' => 'see office']);
            Permission::create(['name' => 'create office']);
            Permission::create(['name' => 'edit office']);
            Permission::create(['name' => 'delete office']);

            // Employees
            // Permission::create(['name' => 'see employee']);
            Permission::create(['name' => 'create employee']);
            Permission::create(['name' => 'edit employee']);
            Permission::create(['name' => 'delete employee']);
            Permission::create(['name' => 'activate employee']);
            Permission::create(['name' => 'inactivate employee']);

            // Departments
            // Permission::create(['name' => 'see department']);
            Permission::create(['name' => 'create department']);
            Permission::create(['name' => 'edit department']);
            Permission::create(['name' => 'delete department']);

            // Organigrama
            Permission::create(['name' => 'see organigrama']);

            // Timetable
            // Permission::create(['name' => 'see timetable']);
                // Records (Registro Jornada)
                Permission::create(['name' => 'create record']);
                Permission::create(['name' => 'edit record']);
                // Permission::create(['name' => 'delete record']);
                Permission::create(['name' => 'validate record']);

            // Documents List
            // Permission::create(['name' => 'see document-list']);
            Permission::create(['name' => 'see free-space']);
            Permission::create(['name' => 'create document-list']);
            Permission::create(['name' => 'edit document-list']);
            Permission::create(['name' => 'delete document-list']);
                // Documents
                // Permission::create(['name' => 'see document']);
                // Permission::create(['name' => 'download document']);
                Permission::create(['name' => 'create document']);
                Permission::create(['name' => 'delete document']);

            // Calendar
            // Permission::create(['name' => 'see calendar']);
                // Festivities
                Permission::create(['name' => 'create festivity']);
                Permission::create(['name' => 'edit festivity']);
                Permission::create(['name' => 'delete festivity']);
                // Holidays
                Permission::create(['name' => 'create holiday']);
                Permission::create(['name' => 'edit holiday']);
                Permission::create(['name' => 'validate holiday']);
                Permission::create(['name' => 'refuse holiday']);

            // Subscriptions
            Permission::create(['name' => 'see subscription']);
            Permission::create(['name' => 'update subscription']);

        // Roles
        Role::create(['name' => 'super-admin'])
            ->givePermissionTo(Permission::all());

        // Administrador: El usuario que ha dado de alta el servicio
        Role::create(['name' => 'admin'])
            ->givePermissionTo([
                'edit company',

                'create office',
                'edit office',
                'delete office',

                'create department',
                'edit department',
                'delete department',

                'create employee',
                'edit employee',
                'delete employee',
                'activate employee',
                'inactivate employee',

                'create record',
                'edit record',
                'validate record',

                'see free-space',
                'create document-list', // Si no es un listado predeterminado
                'edit document-list',   // Si no es un listado predeterminado
                'delete document-list', // Si no es un listado predeterminado

                'create document',
                'delete document',

                'create festivity',
                'edit festivity',
                'delete festivity',

                'create holiday',
                'edit holiday',
                'validate holiday',
                'refuse holiday',

                'see subscription',
                'update subscription',
            ]);

        // Responsable departamento
        Role::create(['name' => 'manager'])
            ->givePermissionTo([
                'create employee',      // Si es el responsable del empleado
                'edit employee',        // Si es el responsable del empleado
                'activate employee',    // Si es el responsable del empleado
                'inactivate employee',  // Si es el responsable del empleado

                'create record',        // Si es el responsable del empleado, o el propietario
                'edit record',          // Si es el responsable del empleado, o el propietario
                'validate record',      // Si es el responsable del empleado, o el propietario

                'create document-list', // Se vincula automáticamente a su oficina => departamento
                'edit document-list',   // Si es el propietario y no es una lista de documentos predefinia
                'delete document-list', // Si es el propietario y no es una lista de documentos predefinia

                'create document',       // Si es el propietario y no es una lista de documentos predefinia
                'delete document',       // Si es el propietario y no es una lista de documentos predefinia

                'create holiday',       // Asociado a su departamento
                'edit holiday',         // Asociado a su departamento
                'validate holiday',     // Asociado a un empleado bajo su supervisión
                'refuse holiday',       // Asociado a un empleado bajo su supervisión
            ]);

        // Trabajador
        Role::create(['name' => 'employee'])
            ->givePermissionTo([
                'edit employee',        // Si es el propietario

                'create record',        // Si es el el propietario
                'edit record',          // Si es el el propietario y aún no ha sido validado por su responsable
            ]);
    }
}
