<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterAuthController;
use App\Http\Controllers\SessionController;
use App\Mail\JobMail;



Route::view('/', 'home');
Route::view('/about', 'about');
Route::view('/contact', 'contact');

Route::get('/jobs', [JobController::class, 'index']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/create', [JobController::class, 'create'])->middleware('auth');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])->middleware('auth')->can('edit', 'job');
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::patch('/jobs/{job}', [JobController::class, 'update'])->middleware('auth')->can('edit', 'job');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth')->can('edit', 'job');


Route::get('/register', [RegisterAuthController::class, 'create']);
Route::post('/register', [RegisterAuthController::class,'store']);

Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);