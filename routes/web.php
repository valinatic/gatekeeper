<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
 

Route::view('/', 'welcome')->name('home');
Route::view('/about', 'pages.about')->name('about');

Route::view('/dashboard', 'dashboard')->middleware(['auth'])->name('dashboard');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

require __DIR__.'/auth.php';