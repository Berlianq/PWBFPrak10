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
<<<<<<< HEAD
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'show'])->name('product.show');
 
Route::resource('/cart', \App\Http\Controllers\CartController::class);
Route::get('/order/checkout', [\App\Http\Controllers\OrderController::class, 'process'])->name('checkout.process');
=======
Route::get('/product{slog}', [\App\Http\Controllers\ShopController::class, 'show'])->name('product.show');

Route::get('/admin', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

>>>>>>> 771846ac7a36a88590ffcee3eb60082ecadabf09
