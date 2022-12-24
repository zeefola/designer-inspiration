<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/design', function () {
    return view('design');
});

Route::get('/details', function () {
    return view('details');
});