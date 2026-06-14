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

// Storage file serving — workaround untuk hosting yang tidak support symlink
// Serve files dari storage/app/public/ via URL /storage/...
Route::get('/storage/{path}', function (string $path) {
    $fullPath = storage_path('app/public/' . $path);

    if (! file_exists($fullPath)) {
        abort(404);
    }

    $mimeType = mime_content_type($fullPath) ?: 'application/octet-stream';

    return response()->file($fullPath, [
        'Content-Type'  => $mimeType,
        'Cache-Control' => 'public, max-age=86400',
    ]);
})->where('path', '.*');
