<?php

use App\Models\JobListing;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => JobListing::all(),
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => JobListing::query()->find($id)
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
