<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin/users', [App\Http\Controllers\UserController::class, 'index'])->name('user.index');
    Route::get('/admin/users/add-new', [App\Http\Controllers\UserController::class, 'add_new'])->name('user.add_new');
    Route::get('/admin/users/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');