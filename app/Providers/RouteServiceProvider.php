<?php

namespace App\Providers;

use App\Models\Employee\PasswordResetToken;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{RateLimiter, Route};

final class RouteServiceProvider extends ServiceProvider
{
    /**
     * @description The path to the "home" route for your application.
     *              This is used by Laravel authentication to redirect users after login.
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * @description The controller namespace for the application.
     *              When present, controller route declarations will automatically be prefixed with this namespace.
     * @var string|null
     */
     //protected $namespace = 'App\\Http\\Controllers';

    /**
     * @description Define your route model bindings, pattern filters, etc.
     * @return void
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->configureExplicitModelBindings();

        $this->routes(function () {
            Route::prefix('api')
                ->middleware('api')
                ->namespace($this->namespace)
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));

            Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/auth.php'));
        });
    }

    /**
     * @description Configure the rate limiters for the application.
     * @return void
     */
    private function configureRateLimiting(): void
    {
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by(optional($request->user())->id ?: $request->ip());
        });
    }

    private function configureExplicitModelBindings(): void
    {
    }
}
