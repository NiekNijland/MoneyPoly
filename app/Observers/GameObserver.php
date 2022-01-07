<?php

namespace App\Observers;

use App\Models\Game;
use App\Models\GameSettings;

class GameObserver
{
    public function created(Game $game): void
    {
        $game->settings()->associate(GameSettings::first());
        $game->save();
    }
}
