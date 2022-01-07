<?php

namespace App\Providers;

use App\Models\Game;
use App\Models\Player;
use App\Observers\GameObserver;
use App\Observers\PlayerObserver;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

final class EventServiceProvider extends ServiceProvider
{
    /**
     * @description Register any events for your application.
     * @return void
     */
    public function boot(): void
    {
        Player::observe(PlayerObserver::class);
        Game::observe(GameObserver::class);
    }
}
