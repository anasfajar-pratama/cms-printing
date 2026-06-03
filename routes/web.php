<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;

// Landing page utama - tampilkan halaman DZ Jersey Pro
// Route::get('/', function () {
//     return view('landing');
// });
Route::get('/', [LandingController::class, 'index'])->name('home');


// Jika ingin tetap bisa akses welcome page default Laravel
Route::get('/welcome', function () {
    return view('welcome');
});


