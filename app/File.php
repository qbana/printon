<?php namespace printon;

use Illuminate\Database\Eloquent\Model;

class File extends Model {

    protected $table = 'files';

    public $timestamps = false;

    protected $fillable = ['file_name','slug', 'body'];


    public function formats()
    {
        return $this->belongsToMany('printon\Format','file_format');
    }

}
