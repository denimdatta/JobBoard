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

    return view('jobs', [
        'jobs' => $jobs,
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    return view('job', [
        'job' => JobListing::query()->find($id),
    ]);
});

Route::get('/jobs/company/{id}', function ($id) {
    $company = Company::with('jobs.company')->find($id);

    return view('company_job', [
        'company' => $company,
        'jobs' => $company->jobs,
    ]);
});

Route::get('/jobs/tag/{id}', function ($id) {
    $tag = Tag::with('jobs.company')->find($id);

    return view('tag_job', [
        'tag' => $tag,
        'jobs' => $tag->jobs,
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
