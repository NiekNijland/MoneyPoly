<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

final class DashboardController extends Controller
{
    public function index(): View
    {
        return view('pages.dashboard.index', [
            'tab_title' => __('sidebar.dashboard'),
            'page_title' => __('sidebar.dashboard'),
        ]);
    }
}
