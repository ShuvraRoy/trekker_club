<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class User
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->user()->is_admin()) {
            return redirect('/admin');
            // return redirect(403, 'Admin do not have access!Please log in as a user');
        }
        return $next($request);
    }
}
