<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/admin/reviews', [App\Http\Controllers\ReviewController::class, 'index'])->name('review.index');