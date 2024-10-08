<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin/projects/stage', [App\Http\Controllers\ProjectController::class, 'index'])->name('project.index')->middleware('auth');
Route::post('/admin/projects/add-stage', [App\Http\Controllers\ProjectController::class, 'add_stage'])->name('project.add_stage')->middleware('auth');
Route::post('/admin/projects/add-video', [App\Http\Controllers\ProjectController::class, 'add_video'])->name('project.add_video')->middleware('auth');

Route::put('/admin/projects/{project}/update-stage', [App\Http\Controllers\ProjectController::class, 'update_stage'])->name('project.update_stage')->middleware('auth');
Route::put('/admin/projects/{project}/update-video', [App\Http\Controllers\ProjectController::class, 'update_video'])->name('project.update_video')->middleware('auth');