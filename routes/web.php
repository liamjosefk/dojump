<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();

    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('/feed/{feed}', [App\Http\Controllers\FeedController::class, 'show'])->name('feed.show');



Route::middleware('auth')->group(function() {

    Route::get('/admin/dashboard', [App\Http\Controllers\AdminsController::class, 'index'])->name('admin.index');

    Route::get('/admin/dev/app-info', [App\Http\Controllers\AdminsController::class, 'siteInfo'])->name('admin.dev.siteInfo');

    Route::patch('/admin/dev/app-info/{website}/update', [App\Http\Controllers\WebsiteController::class, 'update'])->name('admin.dev.siteInfo.update');


    Route::get('/admin/feed/index', [App\Http\Controllers\FeedController::class, 'index'])->name('admin.feed.index');
    Route::get('/admin/feed/{feed}/post', [App\Http\Controllers\FeedController::class, 'show_admin'])->name('admin.feed.show');
    Route::get('/admin/feed/create', [App\Http\Controllers\FeedController::class, 'create'])->name('admin.feed.create');
    Route::get('/admin/feed/{feed}/edit', [App\Http\Controllers\FeedController::class, 'edit'])->name('admin.feed.edit');
    Route::post('/admin/feed/store', [App\Http\Controllers\FeedController::class, 'store'])->name('admin.feed.store');
    Route::patch('/admin/feed/{feed}/update', [App\Http\Controllers\FeedController::class, 'update'])->name('admin.feed.update');


    Route::get('/admin/users/index', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users');
    Route::get('/admin/users/inactive', [App\Http\Controllers\UserController::class, 'inactive'])->name('admin.users.inactive');
    Route::patch('/admin/users/{user}/enable', [App\Http\Controllers\UserController::class, 'enable'])->name('admin.users.enable');
    Route::patch('/admin/users/{user}/disable', [App\Http\Controllers\UserController::class, 'disable'])->name('admin.users.disable');
    Route::post('/admin/users/add-new-user', [App\Http\Controllers\UserController::class, 'store'])->name('admin.user.store');
    Route::get('/admin/users/add-user', [App\Http\Controllers\UserController::class, 'add_user'])->name('admin.users.add');
    Route::get('/admin/users/{user}/profile', [App\Http\Controllers\UserController::class, 'show'])->name('admin.user.profile');
    Route::put('/admin/users/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('admin.user.update');
    Route::put('/admin/users/{user}/update-user', [App\Http\Controllers\UserController::class, 'update_userPage'])->name('admin.user.update.userPage');
    Route::put('/admin/users/{user}/update-password', [App\Http\Controllers\UserController::class, 'update_password'])->name('admin.user.update_password');

});



Route::get('/admin/feed/{feed}/edit', [App\Http\Controllers\FeedController::class, 'edit'])->middleware('can:view,feed')->name('admin.feed.edit');
Route::delete('/admin/feed/{feed}/delete', [App\Http\Controllers\FeedController::class, 'delete'])->middleware('can:view,feed')->name('admin.feed.delete');
