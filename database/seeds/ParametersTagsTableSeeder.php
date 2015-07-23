<?php

use Illuminate\Database\Seeder;
use printon\Parameter;
use printon\Tag;

class ParametersTagsTableSeeder extends Seeder
{
    public function run()
    {
        $params = Parameter::lists('id');
        $tags = Tag::all();

        foreach($tags as $tag)
        $tag->params()->attach($randValues = array_intersect_key($params, array_flip(array_rand($params, 2))));
    }
}
