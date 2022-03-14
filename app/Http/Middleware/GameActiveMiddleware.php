<?php

namespace App\Http\Middleware;

use App\Enums\GameStatusEnum;
use Closure;
use Illuminate\Http\{RedirectResponse, Request, Response};
use Illuminate\Support\Facades\Auth;

class GameActiveMiddleware
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return RedirectResponse|Response
     */
    public function handle(Request $request, Closure $next): RedirectResponse|Response
    {
        if (Auth::user()?->game->status !== GameStatusEnum::Active()) {
            return redirect()->route('dashboard');
        }

        return $next($request);
    }
}
