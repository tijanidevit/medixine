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
    return to_route('get_login');
    // return view('welcome');
});


Route::prefix('login')->group(function () {
    Route::get('',[LoginController::class,'getLoginPage'])->name('get_login');
    Route::post('',[LoginController::class,'loginAction'])->name('post_login');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('dashboard',[DashboardController::class,'getDashboardPage'])->name('dashboard');
    Route::get('search',[DashboardController::class,'getSearchResult'])->name('search');
    Route::get('notidications',[DashboardController::class,'getSearchResult'])->name('notidications');

    Route::get('settings',[SettingController::class,'getSettingsPage'])->name('get_settings');
    Route::get('logout',[LoginController::class,'logout'])->name('logout');
});

