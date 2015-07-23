<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class OptionSubTableSeeder extends Seeder {

    public function run()
    {
         TestDummy::times(3)->create('printon\OptionSub');
    }

}