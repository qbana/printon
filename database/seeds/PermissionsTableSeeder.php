<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;
use Bican\Roles\Models\Permission;

class PermissionsTableSeeder extends Seeder {

    public function run()
    {

         TestDummy::times(1)->create('Bican\Roles\Models\Permission');
         Permission::create([
            'name'        => 'Manager',
            'slug'        => 'Manager',
            'description' => 'Reporting to Board'
        ]);
        Permission::create([
            'name'        => 'Admin',
            'slug'        => preg_replace('/[\s-]+/', '-',"admin"),
            'description' => 'Reporting to Manager'
        ]);
        Permission::create([
            'name'        => 'Trainee',
            'slug'        => "Trainee",
            'description' => 'Reporting to Admin'
        ]);
    }

}