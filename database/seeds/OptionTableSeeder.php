<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class OptionTableSeeder extends Seeder {

    public function run()
    {
         TestDummy::times(12)->create('printon\Option');
    }

}