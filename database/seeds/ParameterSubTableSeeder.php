<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class ParameterSubTableSeeder extends Seeder {

    public function run()
    {
         TestDummy::times(10)->create('printon\ParameterSub');
    }

}