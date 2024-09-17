<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/admin/projects/stage', [App\Http\Controllers\ProjectController::class, 'index'])->name('project.index');
Route::post('/admin/projects/add-stage', [App\Http\Controllers\ProjectController::class, 'add_stage'])->name('project.add_stage');
Route::post('/admin/projects/add-video', [App\Http\Controllers\ProjectController::class, 'add_video'])->name('project.add_video');

Route::get('/admin/projects/{project}/update', [App\Http\Controllers\ProjectController::class, 'update'])->name('project.update');