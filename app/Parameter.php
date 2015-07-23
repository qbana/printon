<?php namespace printon;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model {


    protected $table = 'parameters';

    public $timestamps = false;

    protected $fillable = ['name','slug', 'body', 'owner_id',  'created_id',  'updated_id'];



    public function tags()
    {
        return $this->belongsToMany('printon\Tag','parameter_tag');
    }

    // public function subs()
    // {
    //     return $this->hasMany('printon\ParameterSub', 'parameter_id');
    // }

    public function getParameterSubListsAttribute()
    {
        return $this->sub()->lists('id');
    }

    public function owner()
    {
        return $this->belongsTo('printon\User','owner_id');
    }

}
