<?php

use Illuminate\Database\Seeder;
use printon\Option;
use printon\Tag;

class OptionsTagsTableSeeder extends Seeder
{
    public function run()
    {
        $options = Option::lists('id');
        $tags = Tag::all();

        foreach($tags as $tag)
        $tag->options()->attach($randValues = array_intersect_key($options, array_flip(array_rand($options, 2))));
    }
}
