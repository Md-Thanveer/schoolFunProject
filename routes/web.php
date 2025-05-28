<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\StudentController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/school', [SchoolController::class, 'index'])->name('school');
Route::get('/classes', [ClassController::class, 'index'])->name('classes');
Route::get('/events', [EventController::class, 'index'])->name('events');
Route::get('/students', [StudentController::class, 'index'])->name('students');
