<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class FormatTableSeeder extends Seeder {

    public function run()
    {
         TestDummy::times(6)->create('printon\Format');
    }

}