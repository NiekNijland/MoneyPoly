<?php

namespace App\Events;

use Illuminate\Broadcasting\{
    Channel,
    InteractsWithSockets,
    PrivateChannel,
};
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class SentToFreeParkingEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public string $gameToken,
        public string $playerName,
        public int $money,
    ) { }

    /**
     * @return Channel
     */
    public function broadcastOn(): Channel
    {
        return new PrivateChannel("game.$this->gameToken");
    }
}
