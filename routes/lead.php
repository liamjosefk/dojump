<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::post('/store-email', [App\Http\Controllers\LeadController::class, 'store'])->name('store_email');
Route::post('/mc-subscribe', [App\Http\Controllers\LeadController::class, 'subscribe'])->name('lead.subscribe');


Route::get('/admin/mailchimp', [App\Http\Controllers\LeadController::class, 'index'])->name('lead.index');