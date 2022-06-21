<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->guest()) {
            return to_route('home');
        }

        if (!auth()->user()->is_admin) {
            return to_route('home');
        }
        return $next($request);
    }
}
