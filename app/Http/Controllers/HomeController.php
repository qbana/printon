<?php namespace printon\Http\Controllers;

class HomeController extends Controller {

	public function __construct()
	{

	}

	public function index()
	{
		return view('printon_pages.home');
        //tagi
        //
	}

}
