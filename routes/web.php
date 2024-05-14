<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
    // $jobs = Job::all();
    // dd($jobs[0]->salary);
});


Route::get('/jobs', function () {
    //$jobs = Job::with('employer')->get();
 //   $jobs = Job::with('employer')->paginate(3);
  //  $jobs = Job::with('employer')->simplePaginate(3);
    $jobs = Job::with('employer')->cursorPaginate(3);

    return view('jobs', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/{id}', function ($id) {
  

    $job = Job::find($id);

//    $job = Arr::first($jobs, function($job) use ($id) {
//     return $job['id'] = $id;
//     dd($job);
//    });

    return view('job', ['job' => $job] );
});

Route::get('/contact', function () {
    return view('contact');
});
