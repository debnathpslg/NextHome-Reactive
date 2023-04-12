<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', function () {
        return redirect()->route('home');
    });

    Route::post('/login', [AuthController::class, 'authenticateUserForLogin'])->name('login.auth');
    Route::put('/login', [AuthController::class, 'logoutUser'])->name('logout');
});

Route::get('/login', [AuthController::class, 'showLoginPage'])->name('login')->middleware('guest');

Route::get('/test', function () {
    return view('test');
});
