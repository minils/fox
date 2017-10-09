<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_superadmin = Role::where('name', 'Superadmin')->first();

        $user = new User();
        $user->name = "Nils";
        $user->email = "nils@schwabe.ws";
        $user->password = bcrypt("nils");
        $user->save();
        $user->roles()->attach($role_superadmin);
    }
}
