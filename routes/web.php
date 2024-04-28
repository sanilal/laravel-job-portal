<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Arr;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id'=> 1,
                'title'=>'Director',
                'salary'=> '$40000'
            ],
            [
                'id'=> 2,
                'title'=>'Programmer',
                'salary'=> '$20000'
            ],
            [
                'id'=> 3,
                'title'=>'Teacher',
                'salary'=> '$35000'
            ],
        ]
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id'=> 1,
            'title'=>'Director',
            'salary'=> '$40000'
        ],
        [
            'id'=> 2,
            'title'=>'Programmer',
            'salary'=> '$20000'
        ],
        [
            'id'=> 3,
            'title'=>'Teacher',
            'salary'=> '$35000'
        ],
    ];

    $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

//    $job = Arr::first($jobs, function($job) use ($id) {
//     return $job['id'] = $id;
//     dd($job);
//    });

    return view('job', ['job' => $job] );
});

Route::get('/contact', function () {
    return view('contact');
});
