<?php

namespace App\Http\Middleware;

use Closure;


class AdminUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!$request->user()->is_admin()) {
            return abort(403, 'You do not have access!');
        }
        return $next($request);
    }
}
