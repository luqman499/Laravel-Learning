<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'index');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/signup', [SingupController::class, 'create']);
Route::get('/login', [LoginController::class, 'create']);
