<?php

use Illuminate\Support\Facades\Route;


Route::get('/hell', function () {
    return view('about');
});


Route::get('/', function () {
    return view('welcome');
});


