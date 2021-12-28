<?php

use App\Http\Controllers\JoinController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'guest'], function() {
    Route::get('/join', [JoinController::class, 'index'])->name('join');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('leave', [JoinController::class, 'leave'])->name('leave');
});

