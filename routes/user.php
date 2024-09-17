<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
Route::post('/admin/users', [App\Http\Controllers\UserController::class, 'store'])->name('admin.user.store');

Route::get('/admin/users/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
