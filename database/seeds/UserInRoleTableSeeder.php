<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;
use printon\User;

class UserInRoleTableSeeder extends Seeder {

    public function run()
    {
        $users = User::all();

        $roles = Role::all();
        
        foreach($users as $user)
        $user->attachRole($roles[rand(0,count($roles)-1)]);    
    }

}
