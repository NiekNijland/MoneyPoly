<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

final class BankController extends Controller
{
    public function index(): View
    {
        $player = Auth::user();

        if ($player === null) {
            abort(403);
        }

        return view('pages.bank.index', [
            'page_title' => $player->game->token,
            'token' => $player->game->token,
            'playerCount' => $player->game->players()->count(),
            'players' => $player->game->players,
            'game' => $player->game,
        ]);
    }
}
