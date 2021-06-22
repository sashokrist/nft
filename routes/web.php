<?php

use App\Http\Controllers\LinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TokenController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [LinkController::class, 'index']);
Route::get('/link/create', [LinkController::class, 'create'])->name('link/create');
Route::post('/link/store', [LinkController::class, 'store'])->name('link/store');
Route::post('/link/delete', [LinkController::class, 'destroy'])->name('link/delete');

//Search
Route::get('/search', [LinkController::class, 'getResults'])->name('search.results');

//Token
Route::get('/token', [TokenController::class, 'index'])->name('token');
Route::get('/token/create', [TokenController::class, 'create'])->name('token/create');
Route::post('/token/store', [TokenController::class, 'store'])->name('token/store');
//About
Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/config-clear', function() {
    Artisan::call('config:clear');
    dd('done');
    exit();
});

Route::get('/config-cache', function() {
    Artisan::call('config:cache');
    dd('done');
    exit();
});

Route::get('/cache-clear', function() {
    Artisan::call('cache:clear');
    dd('done');
    exit();
});

Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    dd('done');
    exit();
});

Route::get('/optimize', function() {
    Artisan::call('optimize');
    dd('done');
    exit();
});

Route::get('/route-clear', function() {
    Artisan::call('route:clear');
    dd('done');
    exit();
});
