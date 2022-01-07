<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

final class DashboardController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard.index', [
            'page_title' => Auth::user()->game->token,
            'token' => Auth::user()->game->token,
            'playerCount' => Auth::user()->game->players()->count(),
        ]);
    }
}
