<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;

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

Route::get('/', function () {
    return to_route('login');
    // return view('welcome');
});


Route::prefix('login')->group(function () {
    Route::get('',[LoginController::class,'getLoginPage'])->name('login');
    Route::post('',[LoginController::class,'loginAction'])->name('loginAction');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard',[DashboardController::class,'getDashboardPage'])->name('dashboard');
    Route::get('search',[DashboardController::class,'getSearchResult'])->name('search');
    Route::get('notidications',[DashboardController::class,'getSearchResult'])->name('notifications');

    Route::get('settings',[SettingController::class,'getSettingsPage'])->name('settings');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
});

