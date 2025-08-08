<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\TimelineController; // Tidak diperlukan jika tidak pakai controller

// Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Tentang
Route::get('/Filosofi', function () {
    return view('Filosofi');
})->name('Filosofi');

// Kontak (tanpa controller)
Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

// Timeline — Menampilkan Blade langsung
Route::get('/timeline', function (): View {
    return view('timeline');
})->name('timeline');

// Group
Route::get('/group', [GroupController::class, 'index'])->name('group'); // halaman form pencarian
Route::get('/group/search', [GroupController::class, 'search'])->name('group.search'); // halaman hasil pencarian
