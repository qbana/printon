<?php namespace printon\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;

abstract class Controller extends BaseController {

    protected $user;
    protected $signedIn;

	use DispatchesCommands, ValidatesRequests;


    public function __construct()
    {
        $this->user = $this->signedIn = \Auth::user();
    }


}



