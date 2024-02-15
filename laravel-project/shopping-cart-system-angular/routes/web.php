<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

Route::get('product/{id}', [ProductController::class, 'productDetails'])->name('product-details');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add-to-cart');

Route::get('shopping-cart', [ProductController::class, 'shoppingCart'])->name('shopping-cart.page');
Route::get('add-product', [ProductController::class, 'add_product'])->name('add-product.page');
Route::post('add-product', [ProductController::class, 'post_product'])->name('post-product');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('show-mig', [App\Http\Controllers\FrontViewController::class, 'showMig']);

Route::get("/dummy-users", [App\Http\Controllers\FrontViewController::class, 'dumm_users']);