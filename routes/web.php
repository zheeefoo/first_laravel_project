<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
    // return 'About';
    // return ['status' => true, 'message' => 'Yes'];
})->name('about');

Route::get('contact', function () {
    return view('contact');
});