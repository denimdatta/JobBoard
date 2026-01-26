<?php

use App\Models\Company;
use App\Models\JobListing;
use App\Models\Tag;
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
        'job' => JobListing::query()->find($id),
    ]);
});

Route::get('/jobs/company/{id}', function ($id) {
    return view('company_job', [
        'company' => Company::query()->find($id),
        'jobs' => JobListing::query()->where('company_id', $id)->get(),
    ]);
});

Route::get('/jobs/tag/{id}', function ($id) {
    $tag = Tag::query()->find($id);

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
