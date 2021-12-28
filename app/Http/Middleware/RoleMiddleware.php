<?php

namespace App\Http\Middleware;

use App\Enums\EmployeeRoleEnum;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    /**
     * @description Handle an incoming request.
     * @param Request $request
     * @param Closure $next
     * @param int ...$roleValues
     * @return mixed
     */
    final public function handle(Request $request, Closure $next, int ...$roleValues): mixed
    {
        if (in_array(Auth::user()->role->value, $roleValues, true)) {
            return $next($request);
        }

        return abort(401);
    }
}
