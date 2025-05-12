<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [

    ]);
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Software Engineer',
                'company' => 'Tech Company',
                'location' => 'New York, NY',
                'description' => 'Develop and maintain software applications.',
            ],
            [
                'id' => 2,
                'title' => 'Data Analyst',
                'company' => 'Data Corp',
                'location' => 'San Francisco, CA',
                'description' => 'Analyze data and generate reports.',
            ],
            [
                'id' => 3,
                'title' => 'Project Manager',
                'company' => 'Business Solutions',
                'location' => 'Remote',
                'description' => 'Manage projects and coordinate teams.',
            ]
        ]
    ]);
    // return 'About';
    // return ['status' => true, 'message' => 'Yes'];
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer',
            'company' => 'Tech Company',
            'location' => 'New York, NY',
            'description' => 'Develop and maintain software applications.',
        ],
        [
            'id' => 2,
            'title' => 'Data Analyst',
            'company' => 'Data Corp',
            'location' => 'San Francisco, CA',
            'description' => 'Analyze data and generate reports.',
        ],
        [
            'id' => 3,
            'title' => 'Project Manager',
            'company' => 'Business Solutions',
            'location' => 'Remote',
            'description' => 'Manage projects and coordinate teams.',
        ]
    ];

    $job = Arr::first($jobs, function ($value, $key) use ($id) {
        return $value['id'] == $id;
    });

    // $job = Arr::first($jobs, fn($job) => $job['id'] == $id);

    // dump($job);
    // dd($id);

    return view('job', [
        'job' => $job
    ]);
});

Route::get('contact', function () {
    return view('contact');
});