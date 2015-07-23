<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class ImageTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::times(21)->create('printon\Image');
    }

}






