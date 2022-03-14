<?php

namespace App\Observers;

use App\Models\Game;
use App\Models\GameSettings;

class GameObserver
{
    public function creating(Game $game): void
    {
        $game->free_parking_money = 0;
    }

    public function created(Game $game): void
    {
        $game->settings()->associate(GameSettings::firstOrFail());
        $game->save();
    }
}
