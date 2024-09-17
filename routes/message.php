<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::post('/send-message', [App\Http\Controllers\MessageController::class, 'store'])->name('message.store');


Route::get('/admin/messages', [App\Http\Controllers\MessageController::class, 'index'])->name('message.index');