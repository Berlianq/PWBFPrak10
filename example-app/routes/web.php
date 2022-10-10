<?php

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




Route::get('/', [\App\Http\Controllers\HomeController::class,'index'])->name('homepage');
Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index'])->name('shop.index');
Route::get('/product{slog}', [\App\Http\Controllers\ShopController::class, 'show'])->name('product.show');

Route::get('/admin', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

