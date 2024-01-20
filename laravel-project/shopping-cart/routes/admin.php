<?php
use App\Http\Controllers\AdminController;

// Auth::routes();

Route::get('/admin/home', [AdminController::class, 'index'])->name("admin.home");

Route::get('/admin/user', [AdminController::class, 'user_form'])->name('add.user-form');
Route::post('/admin/user', [AdminController::class, 'save_user'])->name('post.user');
Route::get('/admin/user/{id}', [AdminController::class, 'delete_user'])->name('delete.user');

Route::get('/admin/edit-user/{id}', [AdminController::class, 'edit_user'])->name('edit.user');
Route::post('/admin/udpate-user', [AdminController::class, 'update_user'])->name('udpate.user');