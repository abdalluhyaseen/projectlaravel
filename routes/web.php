<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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



Route::get('/dashboard', function () {
    return view('dashbord.layout.dashbord');
})->middleware(['auth', 'verified'])->name('dashboard');




Route::get('/about', function () {
    return view('public.layout.about');
});

Route::get('/contact', function () {
    return view('public.layout.contact');
});

Route::get('/services', action: function () {
    return view('public.layout.services');
});

Route::get('/booking', function () {
    return view('public.layout.booking');
});


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');


Route::middleware(['auth', 'role:super_admin'])->get('/super-admin-dashboard', [SuperAdminController::class, 'index'])->name('super_admin.dashboard');
Route::middleware(['auth', 'role:admin'])->get('/admin-dashboard', [AdminController::class, 'index'])->name('admin.dashboard');



Route::get('/', [HomeController::class, 'index'])->name('homepage');


Route::resource('customer',CustomerController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
