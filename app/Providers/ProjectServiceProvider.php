<?php

namespace App\Providers;

use App\Services\{
    SidebarService,
    ThemeService
};
use Illuminate\Support\ServiceProvider;

final class ProjectServiceProvider extends ServiceProvider
{
    /**
     * @description Register services.
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(ThemeService::class);
        $this->app->bind(SidebarService::class);
    }
}
