<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class ParameterTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::times(9)->create('printon\Parameter');
    }

}