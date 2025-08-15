<?php

use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FeedbackController;
use App\Exports\FeedbackExport;
use Maatwebsite\Excel\Facades\Excel;

// Beranda
Route::get('/', function () {
    return view('beranda');
})->name('beranda');

// Tentang
Route::get('/Filosofi', function () {
    return view('Filosofi');
})->name('Filosofi');

// Kontak
<<<<<<< HEAD
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');

// Timeline
Route::get('/timeline', function (): View {
=======
Route::get('/kontak', action: function () {
    return view('kontak');
})->name('kontak');
// Kontak
Route::get('/timeline', action: function () {
>>>>>>> 5ad7fce (Commit)
    return view('timeline');
})->name('timelina');

// Export Excel
Route::get('/feedback-export', function () {
    return Excel::download(new FeedbackExport, 'feedback.xlsx');
})->name('feedback.export');

// Group
<<<<<<< HEAD
Route::get('/group', [GroupController::class, 'index'])->name('group');
Route::get('/group/search', [GroupController::class, 'search'])->name('group.search');
    
// Feedback POST
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
=======
Route::get('/group', [MahasiswaController::class, 'group'])->name('group');
Route::get('/group/search', [MahasiswaController::class, 'search'])->name('group.search'); // halaman hasil pencarian
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');// Export Excel
Route::get('/feedback-export', function () {
    return Excel::download(new FeedbackExport, 'feedback.xlsx');
})->name('feedback.export');
>>>>>>> 5ad7fce (Commit)
