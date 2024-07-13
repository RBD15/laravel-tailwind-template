<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/not-found', function () {
    return view('404');
});

Route::get('/error', function () {
    return view('500');
});
