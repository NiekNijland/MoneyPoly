<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class JoinController extends Controller
{
    public function index(): View
    {
        return view('join.index');
    }
}
