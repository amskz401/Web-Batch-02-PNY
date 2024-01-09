<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\FrontViewController::class, 'getProducts'])->name('my-products.page');

Route::get('product/{id}', [App\Http\Controllers\ProductController::class, 'productDetails'])->name('product-details');
Route::get('shopping-cart', [App\Http\Controllers\ProductController::class, 'shoppingCart'])->name('shopping-cart.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

