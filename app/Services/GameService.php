<?php

namespace App\Services;

use App\{
    Actions\GetGameTokenAction,
    Enums\GameStatus,
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
            'status' => GameStatus::Waiting(),
        ]);
    }

    public function startGame(Game $game, Player $player): void
    {
        $game->update([
            'status' => GameStatus::Active(),
        ]);

        GameStartedEvent::dispatch($game, $player);
    }
}
