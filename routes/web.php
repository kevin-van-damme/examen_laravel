<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\BookingController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/addTrip', function () {
        return view('addTrip');
    })->name('addTrip');
});
