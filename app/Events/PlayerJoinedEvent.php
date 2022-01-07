<?php

namespace App\Events;

use App\Models\Player;
use Illuminate\Broadcasting\{Channel, InteractsWithSockets, PrivateChannel};
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PlayerJoinedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string $playerName;

    public string $playerRouteKey;

    public string $gameToken;

    public int $gamePlayerCount;

    /**
     * @return void
     */
    public function __construct(Player $player)
    {
        $this->playerName = $player->name;
        $this->playerRouteKey = $player->getRouteKey();
        $this->gameToken = $player->game->token;
        $this->gamePlayerCount = $player->game->players()->count();
    }

    /**
     * @return Channel
     */
    public function broadcastOn(): Channel
    {
        return new PrivateChannel("game.$this->gameToken");
    }
}
