<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'salary' => '$80,000',
                'location' => 'New York'
            ],
            [
                'id' => 2,
                'title' => 'Product Manager',
                'salary' => '$95,000',
                'location' => 'San Francisco'
            ],
            [
                'id' => 3,
                'title' => 'UX Designer',
                'salary' => '$75,000',
                'location' => 'Remote'
            ]
        ]
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
