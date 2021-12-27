<?php

namespace App\Actions;

use App\Models\Game;

class GetGameTokenAction implements Action
{
    public function handle(): string
    {
        $token = substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6/strlen(36)) )),1, 6);
        while (Game::where('token', $token)->exists()) {
            $token = substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil(6/strlen(36)) )),1, 6);
        }

        return $token;
    }
}
