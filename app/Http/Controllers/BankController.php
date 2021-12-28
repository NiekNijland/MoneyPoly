<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;

final class BankController extends Controller
{
    public function index(): View
    {
        return view('pages.bank.index', [
            'page_title' => Auth::user()->game->token,
        ]);
    }
}
