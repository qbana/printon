<?php namespace printon\Http\Middleware;

use Closure;
use Bican\Roles\Models\Role;

class RedirectIfAdmin {

	public function handle($request, Closure $next)
	{
        return !$request->user() || !$request->user()->is('admin') ?
        abort(402, 'Unauthorized action, Admin access required.') : $next($request);
	}

}
