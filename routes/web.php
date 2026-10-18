<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartupController;

Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/startups', [StartupController::class, 'index'])
    ->name('startups.index');

Route::get('/startups/{startup}', [StartupController::class, 'show'])
    ->name('startups.show');

Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('pages.kontak');
})->name('kontak');