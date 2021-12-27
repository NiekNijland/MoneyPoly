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
     * @param string $roleValue
     * @return mixed
     */
    final public function handle(Request $request, Closure $next, string $roleValue): mixed
    {
        $required_role = EmployeeRoleEnum::from((int) $roleValue);

        if (Auth::user()->role === $required_role) {
            return $next($request);
        }

        abort(401);
        return null;
    }
}
