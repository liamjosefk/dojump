<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/admin/reviews', [App\Http\Controllers\ReviewController::class, 'index'])->name('review.index')->middleware('auth');
Route::post('/admin/reviews/add-new', [App\Http\Controllers\ReviewController::class, 'add_new'])->name('review.add_new')->middleware('auth');
Route::put('/admin/reviews/{review}/update', [App\Http\Controllers\ReviewController::class, 'edit'])->name('review.edit')->middleware('auth');
Route::put('/admin/reviews/{review}/attach-project', [App\Http\Controllers\ReviewController::class, 'attach_project'])->name('review.attach_project')->middleware('auth');
