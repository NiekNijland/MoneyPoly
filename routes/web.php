<?php

use App\Http\Controllers\{BankController, DashboardController, JoinController};
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['middleware' => 'auth'], function() {
    Route::get('/', function () {
        return redirect()->route('dashboard');
    });

    Route::get('', [DashboardController::class, 'index'])->name('dashboard');

    //todo: remove 0
    Route::group(['middleware' => 'role:0,1,2'], function() {
        Route::get('bank', [BankController::class, 'index'])->name('bank');
    });
});
