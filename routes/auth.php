<?php

use App\Http\Controllers\JoinController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function() {
    Route::get('/join', [JoinController::class, 'index'])->name('join');
});

