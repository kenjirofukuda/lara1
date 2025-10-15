<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;
use \App\Models\Job;


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
    return View('jobs', ['jobs' => Job::all()]);
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return View('job', ['job' => $job]);
});
