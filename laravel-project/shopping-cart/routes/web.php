<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
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

Route::get('/', [CartController::class, 'index']);
Route::get('add-to-cart/{id}', [CartController::class, 'add_to_cart'])->name('add-to.cart');
Route::get('cart', [CartController::class, 'show_cart'])->name('show.cart');
Route::get('remove-item/{id}', [CartController::class, 'removeItem'])->name('remove.item');
Route::post('process-order', [CartController::class, 'processOrder'])->name('process.order');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


