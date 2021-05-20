<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user           = new User;
        $user->name     = 'Administrador';
        $user->email    = 'admin@youtterds.es';
        $user->password = bcrypt('123');
        $user->touch();
        $user->save();

        $user->assignRole('admin');

        $user           = new User;
        $user->name     = 'Responsable';
        $user->email    = 'manager@youtterds.es';
        $user->password = bcrypt('123');
        $user->touch();
        $user->save();

        $user->assignRole('manager');

        $user           = new User;
        $user->name     = 'Trabajador';
        $user->email    = 'employee@youtterds.es';
        $user->password = bcrypt('123');
        $user->touch();
        $user->save();

        $user->assignRole('employee');
    }
}
