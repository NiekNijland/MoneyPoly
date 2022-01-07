<?php

namespace App\Events;

use App\Models\{Game, Player};
use Illuminate\Broadcasting\{
    Channel,
    InteractsWithSockets,
    PrivateChannel,
};
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class GameStartedEvent implements ShouldBroadcast
{
    use Dispatchable,
        InteractsWithSockets,
        SerializesModels;

    public string $playerName;

    private string $gameToken;

    public function __construct(Game $game, Player $player)
    {
        $this->gameToken = $game->token;
        $this->playerName = $player->name;
    }

    /**
     * @return Channel
     */
    public function broadcastOn(): Channel
    {
        return new PrivateChannel("game.$this->gameToken");
    }
}
