<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
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

    Route::prefix('products')->as('product.')->group(function () {
        Route::get('', [ProductController::class, 'index'])->name('index');
        Route::get('new', [ProductController::class, 'create'])->name('create');
        Route::post('', [ProductController::class, 'store'])->name('store');
        Route::delete('{product}', [ProductController::class, 'delete'])->name('delete');
        Route::get('{product}', [ProductController::class, 'show'])->name('show');
    });
});

