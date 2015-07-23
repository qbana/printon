<?php namespace printon\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {

	protected $middleware = [
		'Illuminate\Foundation\Http\Middleware\CheckForMaintenanceMode',
		'Illuminate\Cookie\Middleware\EncryptCookies',
		'Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse',
		'Illuminate\Session\Middleware\StartSession',
		'Illuminate\View\Middleware\ShareErrorsFromSession',
		'printon\Http\Middleware\VerifyCsrfToken',
	];

	protected $routeMiddleware = [
		'auth'          => 'printon\Http\Middleware\Authenticate',
        'auth.basic'    => 'Illuminate\Auth\Middleware\AuthenticateWithBasicAuth',
		'guest'         => 'printon\Http\Middleware\RedirectIfAuthenticated',
        // 'admin'         => 'printon\Http\Middleware\RedirectIfAdmin',
        // 'agency'        => 'printon\Http\Middleware\RedirectIfAgency',
        // 'jedi'          => 'printon\Http\Middleware\RedirectIfJedi',
        // 'printHouse'    => 'printon\Http\Middleware\RedirectIfPrintingHouse',
        'role' 			=> \Bican\Roles\Middleware\VerifyRole::class,
	    'permission' 	=> \Bican\Roles\Middleware\VerifyPermission::class,
	    'level' 		=> \Bican\Roles\Middleware\VerifyLevel::class,
	];

}
