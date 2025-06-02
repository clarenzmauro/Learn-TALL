<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; // forgot to add this and resulted to laravel not being able to find the PostController class

Route::get('/', function () {
    // this simply returns the welcome view in the root route
    return view('welcome');
});

Route::get('/hello', [PostController::class, 'index']); // instead of a direct function, we use the PostController's index method; this makes the code much cleaner

Route::get('/about', function () {
    // this returns the about view in the about route
    return view('about');
});