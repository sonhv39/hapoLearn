<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\CourseController;

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/listcourse', [CourseController::class, 'index'])->name('course');
