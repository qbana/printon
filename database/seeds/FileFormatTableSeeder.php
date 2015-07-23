<?php

use Illuminate\Database\Seeder;
use printon\File;
use printon\Format;

class FileFormatTableSeeder extends Seeder {

    public function run()
    {
        $formats = Format::lists('id');
        $files = File::all();

        foreach($files as $file)
        $file->formats()->attach($randValues = array_intersect_key($formats, array_flip(array_rand($formats, 2))));
    }

}