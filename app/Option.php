<?php namespace printon;

use Illuminate\Database\Eloquent\Model;

class Option extends Model {

    protected $table = 'options';

    public $timestamps = false;

    protected $fillable = ['name','slug', 'body', 'owner_id',  'created_id',  'updated_id'];


    public function tags()
    {
        return $this->belongsToMany('printon\Tag','option_tag');
    }

    // public function subs()
    // {
    //     return $this->hasMany('printon\OptionSub', 'option_id');
    // }

    public function getOptionSubListsAttribute()
    {
        return $this->subs()->lists('id');
    }

    public function owner()
    {
        return $this->belongsTo('printon\User','owner_id');
    }


}
