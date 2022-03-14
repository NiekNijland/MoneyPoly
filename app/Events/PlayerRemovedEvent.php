<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PlayerRemovedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * @description Create a new event instance.
     * @return void
     */
    public function __construct(
        public string $gameToken,
        public string $playerRouteKey,
        public string $playerName,
    ) { }

    /**
     * @description Get the channels the event should broadcast on.
     * @return PrivateChannel
     */
    public function broadcastOn(): PrivateChannel
    {
        return new PrivateChannel("game.$this->gameToken");
    }
}
