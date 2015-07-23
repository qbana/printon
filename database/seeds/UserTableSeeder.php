<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class UserTableSeeder extends Seeder {

    public function run()
    {
         
         DB::table('users')->insertGetId([
                'name' => "Jakub",
                'email' => "jmonikowski@yahoo.com",
                'password' => bcrypt("password1"),
                'remember_token' => NULL,
         ]);

         DB::table('users')->insertGetId([
            'name' => "Adrian",
            'email' => "krawczyk.adrian@hotmail.com",
            'password' => bcrypt("password1"),
            'remember_token' => NULL,
         ]);

         TestDummy::times(30)->create('printon\User');
    }

}