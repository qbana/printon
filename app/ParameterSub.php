<?php namespace printon;

use Illuminate\Database\Eloquent\Model;

class ParameterSub extends Model {

    protected $table = 'parameter_subs';

    public $timestamps = false;

    protected $fillable = ['name','slug', 'body'];


    // public function parameter()
    // {
    //     return $this->belongsTo('printon\Parameter', 'parameter_id');
    // }

}
