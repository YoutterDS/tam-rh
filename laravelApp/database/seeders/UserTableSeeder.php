<?php

use App\Role;
use App\User;
use Illuminate\Database\Seeder;
use App\Permission;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user           = new User;
        $user->name     = 'SuperAdministrador';
        $user->email    = 'pere.fonfreda@youtterds.com';
        $user->password = bcrypt('123');
        $user->touch();
        $user->save();

        $role           = Role::where('type', 'SA')->get()->first();
        $user->roles()->save($role);

        $permission     = Permission::find(1);
        $user->permissions()->save($permission);

    }
}
