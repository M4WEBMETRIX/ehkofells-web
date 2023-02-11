<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


Route::get('/', function () {
    return view('welcome');
});

/*Visitors Routes*/

Route::get('/about',[Controllers\AboutController::class, 'index'])->name('about');
Route::get('/service',[Controllers\ServiceController::class, 'index'])->name('service');
Route::get('/room',[Controllers\RoomsController::class, 'index'])->name('rooms');
Route::resources([
    '/contact' => Controllers\ContactController::class,
    '/booking' => Controllers\BookingController::class,

]);