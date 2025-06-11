<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // return view('welcome');
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::view('/contact', 'contact');
