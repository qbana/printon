<?php namespace printon;

use Illuminate\Database\Eloquent\Model;

class Format extends Model {

    protected $table = 'formats';

    public $timestamps = false;

    protected $fillable = ['name','slug', 'body'];



    public function files()
    {
        return $this->belongsToMany('printon\File','file_format');
    }

}
