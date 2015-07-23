<?php

use Illuminate\Database\Seeder;
use Laracasts\TestDummy\Factory as TestDummy;

class TagsTableSeeder extends Seeder {

    public function run()
    {
         TestDummy::times(20)->create('printon\Tag');
    }

}