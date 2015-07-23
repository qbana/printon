<?php namespace printon;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model {


    protected $table = 'tags';

    public $timestamps = false;

    protected $fillable = ['name','slug', 'body', 'owner_id',  'created_id',  'updated_id'];



    public function params()
    {
        return $this->belongsToMany('printon\Parameter','parameter_tag');
    }

    public function getParamtersListsAttribute()
    {
        return $this->params()->lists('id');
    }

    public function options()
    {
        return $this->belongsToMany('printon\Option','option_tag');
    }

    public function getOptionsListsAttribute()
    {
        return $this->options()->lists('id');
    }

    public function images()
    {
        return $this->belongsToMany('printon\Image','image_tag');
    }

    public function getImagesAttributes()
    {
        return $this->images()->get(['slug', 'unique_id', 'body']);
    }


    public function owner()
    {
        return $this->belongsTo('printon\User','owner_id');
    }

}
