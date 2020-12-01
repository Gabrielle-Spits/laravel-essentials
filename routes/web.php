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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/bookings/peppieenkokkie', [App\Http\Controllers\BookingController::class, 'index'])->name('bookings');
Route::get('/rooms/index', [App\Http\Controllers\ShowRoomsController::class, '__invoke'])->name('rooms');


Route::get('/test',function(){return "goodbye!";});
Route::get("ShowRoomsController");
Route::get('/rooms/{roomType?}', 'App\Http\Controllers\ShowRoomsController');
Route::resource('/bookings','\App\Http\Controllers\BookingController');
Route::resource('/room_types','\App\Http\Controllers\roomTypeController');
