<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tours', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'home'])->middleware('auth')->name('home');

Route::get('/events', [EventController::class, 'events'])->name('events');

Route::post('/events/action', [EventController::class, 'action'])->name('action');

Route::post('/customer/action', [CustomerController::class, 'action'])->name('customer-action');

Route::get('/show-admin/{id}', [AdminController::class, 'show'])->name('show-admin');

Route::post('/store-admin/edit/{id}', [AdminController::class, 'store'])->name('store-admin');

Route::resource('guides', GuideController::class);
