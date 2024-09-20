<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('user.index')->middleware('auth');
Route::post('/admin/users', [App\Http\Controllers\UserController::class, 'store'])->name('admin.user.store')->middleware('auth');

Route::post('/admin/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('user.edit')->middleware('auth');
