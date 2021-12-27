<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * @description Handle an incoming request.
     * @param Request $request
     * @param Closure $next
     * @param array|null ...$guards
     * @return mixed
     */
    final public function handle(Request $request, Closure $next, ...$guards): mixed
    {
        if (Auth::check()) {
            return redirect()->route('dashboard');
        }

        return $next($request, $guards);
    }
}
