<?php

namespace App\Providers;

use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\ServiceProvider;

class BroadcastServiceProvider extends ServiceProvider
{
    /**
     * @description Bootstrap any application services.
     * @return void
     */
    final public function boot(): void
    {
        Broadcast::routes();

        require base_path('routes/channels.php');
    }
}
