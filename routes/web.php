<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Job;


Route::get('/', function () {
    return view('home', ['greeting' => 'Yo', 'name' => 'Kenjiro Fukuda']);
    // dd(Job::find(1));
});

Route::get('/about', function () {
    return View('about');
});

Route::get('/contact', function () {
    return View('contact');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->get();
    return View('jobs', ['jobs' => $jobs]);
});

Route::get('/job/{id}', function ($id) {
    $job = Job::find($id);
    return View('job', ['job' => $job]);
});
