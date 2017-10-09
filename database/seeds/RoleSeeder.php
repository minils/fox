<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = new Role();
        $role_superadmin->name = 'Superadmin';
        $role_superadmin->description = 'Has all privileges.';
        $role_superadmin->save();

        $role_supervisor = new Role();
        $role_supervisor->name = 'Supervisor';
        $role_supervisor->description = 'Supervisor of one or multiple campain(s)';
        $role_supervisor->save();
    }
}
