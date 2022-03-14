<?php

namespace App\Services;

use App\{
    Actions\GetGameTokenAction,
    Enums\GameStatusEnum,
    Events\GameStartedEvent,
    Models\Game,
    Models\Player,
};

final class GameService
{
    public function createGame(): Game
    {
        $token = (new GetGameTokenAction())->handle();

        return Game::create([
            'token' => $token,
            'free_parking_money' => 0,
            'status' => GameStatusEnum::Waiting(),
        ]);
    }

    public function startGame(Game $game, Player $player): void
    {
        $game->update([
            'status' => GameStatusEnum::Active(),
        ]);

        GameStartedEvent::dispatch($game, $player);
    }
}
