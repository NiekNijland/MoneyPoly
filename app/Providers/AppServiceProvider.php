<?php

namespace App\Providers;

use App\Services\{SidebarService, ThemeService};
use Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider;
use Illuminate\Support\{
    Facades\App,
    Facades\View,
    ServiceProvider
};
use Throwable;

class AppServiceProvider extends ServiceProvider
{
    /**
     * @description Register any application services.
     * @return void
     */
    final public function register(): void
    {
        if ($this->app->isLocal()) {
            $this->app->register(IdeHelperServiceProvider::class);
        }
    }

    /**
     * @description Bootstrap any application services.
     * @return void
     * @throws Throwable
     */
    final public function boot(): void
    {
        $themeService = App::make(ThemeService::class);
        View::share('themeService', $themeService);

        $sidebarService = App::make(SidebarService::class);
        View::share('sidebarService', $sidebarService);
    }
}
