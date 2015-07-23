<?php namespace printon\Providers;

use Illuminate\Routing\Router;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use printon\Tag;
use printon\Option;
use printon\Parameter;

class RouteServiceProvider extends ServiceProvider {

	protected $namespace = 'printon\Http\Controllers';

	public function boot(Router $router)
	{
		parent::boot($router);

        $router->bind('tags', function($slug){
            return Tag::where('slug', $slug)->firstOrFail();
        });

        $router->bind('options', function($slug){
            return Option::where('slug', $slug)->firstOrFail();
        });

        $router->bind('parameters', function($slug){
            return Parameter::where('slug', $slug)->firstOrFail();
        });

	}

	public function map(Router $router)
	{
		$router->group(['namespace' => $this->namespace], function($router)
		{
			require app_path('Http/routes.php');
		});
	}

}
