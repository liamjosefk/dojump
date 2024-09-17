<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');