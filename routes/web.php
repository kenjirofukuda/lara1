<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;

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
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Programmer',
                'salary' => '$10,000'
            ],
            [
                'id' => 3,
                'title' => 'Teacher',
                'salary' => '$40,000'
            ]
        ]
    ]);
});


Route::get('/job/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$50,000'
        ],
        [
            'id' => 2,
            'title' => 'Programmer',
            'salary' => '$10,000'
        ],
        [
            'id' => 3,
            'title' => 'Teacher',
            'salary' => '$40,000'
        ]
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
    return View('job', ['job'=> $job]);
});
