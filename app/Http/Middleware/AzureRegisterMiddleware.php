<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

final class AzureRegisterMiddleware
{
    /**
     * @description Handle an incoming request.
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (!Session::has('registrableAzureEmployee')) {
            return redirect()->route('login-redirect');
        }

        return $next($request);
    }
}
