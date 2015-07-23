<?php

return [

	'mandrill' => [
		'secret' => env('MANDRILL_TEST_KEY'),
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'App\User',
		'secret' => ''
	],

];
