<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\BookingController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// dit zijn de api routes voor de bookings
Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
// Dit zijn de api routes voor de trips
Route::get('/trips', [TripController::class, 'index'])->name('trips.index');
Route::post('/trips', [TripController::class, 'store'])->name('trips.store');
