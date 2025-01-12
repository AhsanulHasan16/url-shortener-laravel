<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/shorten-url', [UrlController::class, 'store']);
Route::get('/{shortCode}', [UrlController::class, 'redirect']);
