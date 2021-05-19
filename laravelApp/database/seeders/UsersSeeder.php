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
        $user->name     = 'Test';
        $user->email    = 'test@youtterds.es';
        $user->password = bcrypt('123');
        $user->touch();
        $user->save();

        $role           = Role::where('type', 'A')->get()->first();
        $user->roles()->save($role);

        // $permission     = Permission::find(1);
        // $user->permissions()->save($permission);
    }
}
