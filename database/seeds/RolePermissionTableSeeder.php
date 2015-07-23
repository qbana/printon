<?php

use Illuminate\Database\Seeder;
use Bican\Roles\Models\Role;
use Bican\Roles\Models\Permission;

class RolePermissionTableSeeder extends Seeder
{
    public function run()
    {
		$roles = Role::all();

		$permissions = Permission::all();
		
		foreach($roles as $role)
		{
			for($i=0;$i<count($permissions);$i++)
			$role->attachPermission($permissions[$i]);
		}
    }
}
