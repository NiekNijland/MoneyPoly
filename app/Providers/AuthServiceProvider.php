<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * @description Register any authentication / authorization services.
     * @return void
     */
    final public function boot(): void
    {
        $this->registerPolicies();
    }
}
