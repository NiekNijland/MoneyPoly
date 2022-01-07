<?php

namespace App\Observers;

use App\{
    Events\PlayerJoinedEvent,
    Models\Player,
};

class PlayerObserver
{
    public function creating(Player $player): void
    {
        $player->money = $player->game->settings->player_starting_money;
    }

    public function created(Player $player): void
    {
        PlayerJoinedEvent::dispatch($player);
    }
}
