<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class FileTableSeeder extends Seeder {

    public function run()
    {
        TestDummy::times(3)->create('printon\File');
    }

}