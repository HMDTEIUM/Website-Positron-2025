<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TimelineController;

// Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Tentang
Route::get('/Filosofi', function () {
    return view('Filosofi');
})->name('Filosofi');

// Kontak
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');

// Group
Route::get('/group', [GroupController::class, 'index'])->name('group'); // halaman form pencarian
Route::get('/group/search', [GroupController::class, 'search'])->name('group.search'); // halaman hasil pencarian
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::get('/timeline', [GroupController::class, 'index'])->name('timeline');

