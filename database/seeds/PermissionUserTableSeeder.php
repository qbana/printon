<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Permission;
use printon\User;

class PermissionUserTableSeeder extends Seeder
{
    public function run()
    {
        $users = User::all();

        $permissions = Permission::all();
        
        foreach($users as $user)
        $user->attachPermission($permissions[rand(0,count($permissions)-1)]);    
    }
}
