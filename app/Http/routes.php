<?php

Route::get('/', 'HomeController@index');
Route::get('/home', ['as' => '/', 'uses' => 'HomeController@index']);

Route::resource('tags', 'TagController');

Route::resource('options', 'OptionController');

Route::resource('parameters', 'ParameterController');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


