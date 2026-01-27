<?php

use App\Models\Company;
use App\Models\JobListing;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = JobListing::with('company')->paginate(5);

    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

Route::get('/jobs/company/{id}', function ($id) {
    $company = Company::with('jobs.company')->find($id);
    $jobs = $company->jobs()->paginate(5);

    return view('jobs.company', [
        'company' => $company,
        'jobs' => $jobs,
    ]);
});

Route::get('/jobs/tag/{id}', function ($id) {
    $tag = Tag::with('jobs.company')->find($id);
    $jobs = $tag->jobs()->paginate(5);

    return view('jobs.tag', [
        'tag' => $tag,
        'jobs' => $jobs,
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('jobs.show', [
        'job' => JobListing::query()->find($id),
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
