<?php

namespace App\Http\Controllers;

use App\Events\PlayerLeftEvent;
use Illuminate\Contracts\View\View;
use Illuminate\Http\{RedirectResponse, Request};
use Illuminate\Support\Facades\Auth;

final class JoinController extends Controller
{
    public function index(): View
    {
        return view('join.index');
    }

    public function leave(Request $request): RedirectResponse
    {
        $player = Auth::user();
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        /** @noinspection NullPointerExceptionInspection */
        $player->delete();

        PlayerLeftEvent::dispatch($player);

        return redirect('join');
    }
}
