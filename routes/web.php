<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Models\Post;
// use as class

//use as public
$jobs = [
    [
        'id' => 1,
        'title' => 'Software Engineer1',
        'company' => 'Tech Company',
        'location' => 'New York, NY',
        'description' => 'Develop and maintain software applications.',
    ],
    [
        'id' => 2,
        'title' => 'Data Analyst1',
        'company' => 'Data Corp',
        'location' => 'San Francisco, CA',
        'description' => 'Analyze data and generate reports.',
    ],
    [
        'id' => 3,
        'title' => 'Project Manager1',
        'company' => 'Business Solutions',
        'location' => 'Remote',
        'description' => 'Manage projects and coordinate teams.',
    ]
];

Route::get('/', function () {
    // $jobs = Job::all();
    // dd($jobs[0]->title);

    return view('welcome', [

    ]);
});

//use as class
Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()
    ]);
    // return 'About';
    // return ['status' => true, 'message' => 'Yes'];
});

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('job', [
        'job' => $job
    ]);
});
//------------

//use as public
// Route::get('/jobs', function () use ($jobs) {
//     return view('jobs', [
//         'jobs' => $jobs
//     ]);
//     // return 'About';
//     // return ['status' => true, 'message' => 'Yes'];
// });

// Route::get('/jobs/{id}', function ($id) use ($jobs) {
//     $job = Arr::first($jobs, function ($value, $key) use ($id) {
//         return $value['id'] == $id;
//     });
//     // $job = Arr::first($jobs, fn($job) => $job['id'] == $id);
//     // dump($job);
//     // dd($id);
//     return view('job', [
//         'job' => $job
//     ]);
// });
//------------

Route::get('contact', function () {
    return view('contact');
});

Route::get('/posts', function () {
    return view('posts', [
        'posts' => Post::all()
    ]);
    // return 'About';
    // return ['status' => true, 'message' => 'Yes'];
});

Route::get('/post/{id}', function ($id) {
    $post = Post::find($id);
    return view('post', [
        'post' => $post
    ]);
});