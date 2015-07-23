<?php namespace printon;

use Illuminate\Database\Eloquent\Model;

class OptionSub extends Model {

    protected $table = 'option_subs';

    public $timestamps = false;

    protected $fillable = ['name','slug', 'body'];



    // public function option()
    // {
    //     return $this->belongsTo('printon\Option', 'option_id');
    // }

}
