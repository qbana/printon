<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;
use Bican\Roles\Models\Role;

class RolesTableSeeder extends Seeder {

    public function run()
    {

         TestDummy::times(1)->create('Bican\Roles\Models\Role');
         Role::create([
            'name'        => 'Printeron',
            'slug'        => 'Printeron',
            'description' => 'Dostep tylko dla pracownikow Printon',
            'level'       => '40'
        ]);
        Role::create([
            'name'        => 'Printing House',
            'slug'        => preg_replace('/[\s-]+/', '-','Printing House'),
            'description' => 'Drukarnia',
            'level'       => '30'
        ]);
        Role::create([
            'name'        => 'Advertising Agency',
            'slug'        => "Advertising-Agency",
            'description' => 'Dostep tylko dla Agencji reklamowych',
            'level'       => '20'
        ]);
        Role::create([
            'name'        => 'Client',
            'slug'        => "Client",
            'description' => 'Klient',
            'level'       => '10'
        ]);
    }

}