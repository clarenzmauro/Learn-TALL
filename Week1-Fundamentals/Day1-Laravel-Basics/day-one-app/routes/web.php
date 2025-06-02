<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // this simply returns the welcome view in the root route
    return view('welcome');
});

Route::get('/hello', function () {
    $data = [
        'name' => 'Clarenz',
        'occupation' => 'Student, Trader, Writer',
    ];
    return view('hello', $data); // this passes the hello view and the array of data to the view
});

Route::get('/about', function () {
    // this returns the about view in the about route
    return view('about');
});