<?php

return [

	'debug' => env('APP_DEBUG'),

	'url' => 'http://localhost',

	'timezone' => 'UTC',

	'locale' => 'en',

	'fallback_locale' => 'en',

	'key' => env('APP_KEY', 'SomeRandomString'),

	'cipher' => MCRYPT_RIJNDAEL_128,

	'log' => 'daily',

	'providers' => [

		/*
		 * Laravel Framework Service Providers...
		 */
		'Illuminate\Foundation\Providers\ArtisanServiceProvider',
		'Illuminate\Auth\AuthServiceProvider',
		'Illuminate\Bus\BusServiceProvider',
		'Illuminate\Cache\CacheServiceProvider',
		'Illuminate\Foundation\Providers\ConsoleSupportServiceProvider',
		'Illuminate\Routing\ControllerServiceProvider',
		'Illuminate\Cookie\CookieServiceProvider',
		'Illuminate\Database\DatabaseServiceProvider',
		'Illuminate\Encryption\EncryptionServiceProvider',
		'Illuminate\Filesystem\FilesystemServiceProvider',
		'Illuminate\Foundation\Providers\FoundationServiceProvider',
		'Illuminate\Hashing\HashServiceProvider',
		'Illuminate\Mail\MailServiceProvider',
		'Illuminate\Pagination\PaginationServiceProvider',
		'Illuminate\Pipeline\PipelineServiceProvider',
		'Illuminate\Queue\QueueServiceProvider',
		'Illuminate\Redis\RedisServiceProvider',
		'Illuminate\Auth\Passwords\PasswordResetServiceProvider',
		'Illuminate\Session\SessionServiceProvider',
		'Illuminate\Translation\TranslationServiceProvider',
		'Illuminate\Validation\ValidationServiceProvider',
		'Illuminate\View\ViewServiceProvider',
        'Illuminate\Html\HtmlServiceProvider',
        'Laracasts\Flash\FlashServiceProvider',
        'Laracasts\Generators\GeneratorsServiceProvider',
        'GrahamCampbell\Flysystem\FlysystemServiceProvider',
        'Bican\Roles\RolesServiceProvider',

		/*
		 * Application Service Providers...
		 */
		'printon\Providers\AppServiceProvider',
		'printon\Providers\BusServiceProvider',
		'printon\Providers\ConfigServiceProvider',
		'printon\Providers\EventServiceProvider',
		'printon\Providers\RouteServiceProvider',
		'Intervention\Image\ImageServiceProvider',

	],

	'aliases' => [

		'App'       => 'Illuminate\Support\Facades\App',
		'Artisan'   => 'Illuminate\Support\Facades\Artisan',
		'Auth'      => 'Illuminate\Support\Facades\Auth',
		'Blade'     => 'Illuminate\Support\Facades\Blade',
		'Bus'       => 'Illuminate\Support\Facades\Bus',
		'Cache'     => 'Illuminate\Support\Facades\Cache',
		'Config'    => 'Illuminate\Support\Facades\Config',
		'Cookie'    => 'Illuminate\Support\Facades\Cookie',
		'Crypt'     => 'Illuminate\Support\Facades\Crypt',
		'DB'        => 'Illuminate\Support\Facades\DB',
		'Eloquent'  => 'Illuminate\Database\Eloquent\Model',
		'Event'     => 'Illuminate\Support\Facades\Event',
		'File'      => 'Illuminate\Support\Facades\File',
		'Hash'      => 'Illuminate\Support\Facades\Hash',
		'Input'     => 'Illuminate\Support\Facades\Input',
		'Inspiring' => 'Illuminate\Foundation\Inspiring',
		'Lang'      => 'Illuminate\Support\Facades\Lang',
		'Log'       => 'Illuminate\Support\Facades\Log',
		'Mail'      => 'Illuminate\Support\Facades\Mail',
		'Password'  => 'Illuminate\Support\Facades\Password',
		'Queue'     => 'Illuminate\Support\Facades\Queue',
		'Redirect'  => 'Illuminate\Support\Facades\Redirect',
		'Redis'     => 'Illuminate\Support\Facades\Redis',
		'Request'   => 'Illuminate\Support\Facades\Request',
		'Response'  => 'Illuminate\Support\Facades\Response',
		'Route'     => 'Illuminate\Support\Facades\Route',
		'Schema'    => 'Illuminate\Support\Facades\Schema',
		'Session'   => 'Illuminate\Support\Facades\Session',
		'Storage'   => 'Illuminate\Support\Facades\Storage',
		'URL'       => 'Illuminate\Support\Facades\URL',
		'Validator' => 'Illuminate\Support\Facades\Validator',
		'View'      => 'Illuminate\Support\Facades\View',
        'Form'      => 'Illuminate\Html\FormFacade',
        'HTML'      => 'Illuminate\Html\HtmlFacade',
        'Flash'     => 'Laracasts\Flash\Flash',
        'Flysystem' => 'GrahamCampbell\Flysystem\Facades\Flysystem',
        'Image' => 'Intervention\Image\Facades\Image',
	],

];
