<?php namespace printon;

use Illuminate\Database\Eloquent\Model;

class Image extends Model {


    protected $table = 'images';

    public $timestamps = false;

    protected $fillable = ['slug','img_name', 'body', 'unique_id'];



    public function tags()
    {
        return $this->belongsToMany('printon\Tag','image_tag');
    }

}
