<?php

use Illuminate\Database\Seeder;
use printon\Image;
use printon\Tag;

class ImageTagTableSeeder extends Seeder {

    public function run()
    {
        $imgs = Image::lists('id');
        $tags = Tag::all();

        foreach($tags as $tag)
        $tag->images()->attach($randValues = array_intersect_key($imgs, array_flip(array_rand($imgs, 2))));
    }

}