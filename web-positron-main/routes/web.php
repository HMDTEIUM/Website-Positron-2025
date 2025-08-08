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

<<<<<<< HEAD
Route::get('/Timeline', function () {
    return redirect('/?scrollTo=calendar-section');
});

 

=======
Route::get('/timeline', function () {
    return view('timeline');
})->name('timeline');
>>>>>>> 8a8b5280049d12922721aa2817434d38055e7e0f

// Group
Route::get('/group', [GroupController::class, 'index'])->name('group'); // halaman form pencarian
Route::get('/group/search', [GroupController::class, 'search'])->name('group.search'); // halaman hasil pencarian
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::get('/timeline', [GroupController::class, 'index'])->name('timeline');

