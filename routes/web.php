<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['greeting' => 'Yo', 'name' => 'Kenjiro Fukuda']);
});

Route::get('/about', function () {
    return View('about');
});

Route::get('/contact', function () {
    return View('contact');
});

Route::get('/jobs', function () {
    return View('jobs', [
        'jobs' => [
            [
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ]
    ]);
});
