<?php

use App\Models\Category;
use App\Models\Included;
use App\Models\Notincluded;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\IncludedController;
use App\Http\Controllers\NotincludedController;
use App\Http\Controllers\RegisterController;


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
        'includeds' => IncludedController::class,
        'notincludeds' => NotincludedController::class,
        'categories' => CategoryController::class,
        
       
    
    ]);
});



Route::get('/login', [RegisterController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [RegisterController::class, 'login'])->name('login');
Route::get('/logout', [RegisterController::class, 'logout'])->name('logout');
