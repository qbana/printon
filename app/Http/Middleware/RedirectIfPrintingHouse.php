<?php namespace printon\Http\Middleware;

use Closure;
use Bican\Roles\Models\Role;


class RedirectIfPrintingHouse {

    public function handle($request, Closure $next)
    {
        return !$request->user() || !$request->user()->is('printing-house') ?
        abort(405, 'Unauthorised action. Access only for printing houses.') : $next($request);
    }

}
