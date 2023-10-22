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

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware(['auth' ])->group(function () {
    Route::get('/admin', function () {
        return view('admin.admin');
    });
    Route::resources([
        'tours' => TourController::class,
        
       
    
    ]);
});



Route::get('/login', [RegisterController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [RegisterController::class, 'login'])->name('login');
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');
