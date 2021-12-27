<?php

namespace App\Services;

use App\Actions\GetGameTokenAction;
use App\Models\Game;

final class GameService
{
    public function createGame(): Game
    {
        $token = (new GetGameTokenAction())->handle();

        return Game::create([
            'token' => $token,
        ]);
    }
}
