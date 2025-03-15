<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CustomerController;

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




Route::get('/dash', function () {
    return view('dashbord.layout.dashbord');
});



Route::get('/', function () {
    return view('public.layout.homepage');
});


Route::get('/about', function () {
    return view('public.layout.about');
});

Route::get('/contact', function () {
    return view('public.layout.contact');
});

Route::get('/services', action: function () {
    return view('public.layout.services');
});

Route::get('/portfolio', function () {
    return view('public.layout.portfolio');
});

Route::get('/login', function () {
    return view('public.layout.login');
});

Route::get('/signup', function () {
    return view('public.layout.signup');
});


Route::resource('customer',CustomerController::class);


Route::resource('contacts',ContactController::class);
