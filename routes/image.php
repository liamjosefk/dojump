<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin/image-gallery/view', [App\Http\Controllers\ImageController::class, 'index'])->name('image.index')->middleware('auth');
Route::post('admin/image/add-new', [App\Http\Controllers\ImageController::class, 'add_new'])->name('image.add_new')->middleware('auth');
Route::put('admin/image/{image}/update', [App\Http\Controllers\ImageController::class, 'update'])->name('image.update')->middleware('auth');