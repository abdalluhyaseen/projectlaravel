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
    return view('welcome');
});


Route::get('/home', function () {
    return view('public.layout.homepage');
});


Route::get('/about', function () {
    return view('public.layout.about');
});

Route::get('/contact', function () {
    return view('public.layout.contact');
});

Route::get('/course', function () {
    return view('public.layout.course');
});

Route::get('/detal', function () {
    return view('public.layout.coursedetal');
});


Route::get('/gallery', function () {
    return view('public.layout.gallery');
});

Route::get('/pricing', function () {
    return view('public.layout.pricing');
});


Route::get('/login', function () {
    return view('public.layout.login');
});


Route::get('/register', function () {
    return view('public.layout.register');
});

Route::get('/quote', function () {
    return view('public.layout.quote');
});

