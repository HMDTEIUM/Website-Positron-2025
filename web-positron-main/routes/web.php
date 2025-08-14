<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\GroupController;
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
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');

// Timeline
Route::get('/timeline', function (): View {
    return view('timeline');
})->name('timeline');

// Export Excel
Route::get('/feedback-export', function () {
    return Excel::download(new FeedbackExport, 'feedback.xlsx');
})->name('feedback.export');

// Group
Route::get('/group', [GroupController::class, 'index'])->name('group');
Route::get('/group/search', [GroupController::class, 'search'])->name('group.search');
    
// Feedback POST
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
