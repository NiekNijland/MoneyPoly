<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Authenticate extends Middleware
{
    /**
     * @param Request $request
     * @param Closure $next
     * @param string[] ...$guards
     * @return mixed
     */
    final public function handle($request, Closure $next, ...$guards): mixed
    {
        if (Auth::check()) {
            return $next($request);
        }

        return redirect()->route('join');
    }
}
