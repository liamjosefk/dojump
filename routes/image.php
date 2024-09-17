<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin/image-gallery/view', [App\Http\Controllers\ImageController::class, 'index'])->name('image.index');