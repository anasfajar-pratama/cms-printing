<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KalkulatorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/materials', [KalkulatorController::class, 'materials']);
Route::post('/hitung', [KalkulatorController::class, 'hitung']);