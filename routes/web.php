<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return View('about');
});

Route::get('/contact', function () {
    return View('contact');
});

Route::get('/welcome', function () {
    return View('welcome');
});
