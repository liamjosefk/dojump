<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::post('/send-donation', [App\Http\Controllers\DonationController::class, 'store'])->name('donation.store');

Route::get('/admin/donations', [App\Http\Controllers\DonationController::class, 'index'])->name('donation.index');

Route::put('/admin/donations/{donation}/archive', [App\Http\Controllers\DonationController::class, 'archive'])->name('donation.archive');