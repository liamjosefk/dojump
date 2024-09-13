<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/on-stage', [App\Http\Controllers\HomeController::class, 'on_stage'])->name('home.on_stage');
Route::get('/services/directing', [App\Http\Controllers\HomeController::class, 'services_directing'])->name('home.services.directing');
Route::get('/services/corporate-events', [App\Http\Controllers\HomeController::class, 'services_corporate'])->name('home.services.corporate');
Route::get('/portfolio/stage', [App\Http\Controllers\HomeController::class, 'portfolio_stage'])->name('home.portfolio.stage');
Route::get('/portfolio/photo', [App\Http\Controllers\HomeController::class, 'portfolio_photo'])->name('home.portfolio.photo');
Route::get('/portfolio/video', [App\Http\Controllers\HomeController::class, 'portfolio_video'])->name('home.portfolio.video');
Route::get('/reviews/critic', [App\Http\Controllers\HomeController::class, 'reviews_critic'])->name('home.reviews.critic');
Route::get('/reviews/audience', [App\Http\Controllers\HomeController::class, 'reviews_audience'])->name('home.reviews.audience');
Route::get('/donate', [App\Http\Controllers\HomeController::class, 'donate'])->name('home.donate');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');
Route::get('/that-happened', [App\Http\Controllers\HomeController::class, 'that_happened'])->name('home.that');
Route::get('/photo-gallery', [App\Http\Controllers\HomeController::class, 'photo_gallery'])->name('home.gallery');

Route::post('/store-email', [App\Http\Controllers\LeadController::class, 'store'])->name('store_email');
Route::post('/send-message', [App\Http\Controllers\MessageController::class, 'store'])->name('message.store');
Route::post('/send-donation', [App\Http\Controllers\DonationController::class, 'store'])->name('donation.store');


