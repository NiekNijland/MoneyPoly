<?php

namespace App\Services;

use App\{
    Actions\GetGameTokenAction,
    Enums\GameStatus,
    Models\Game,
};

final class GameService
{
    public function createGame(): Game
    {
        $token = (new GetGameTokenAction())->handle();

        return Game::create([
            'token' => $token,
            'status' => GameStatus::Waiting(),
        ]);
    }
}
