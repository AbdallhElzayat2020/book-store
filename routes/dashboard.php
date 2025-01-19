<?php

use Illuminate\Support\Facades\Route;

Route::view('', 'dashboard.dashboard')->name('index');

// Categories routes
Route::resource('category', \App\Http\Controllers\Dashboard\CategoryController::class);

// Books routes
Route::resource('book', \App\Http\Controllers\Dashboard\BookController::class);

// Contacts routes
Route::get('contact', [\App\Http\Controllers\Dashboard\ContactController::class, 'index'])
    ->name('contact.index');
Route::delete('contact/{contact}', [\App\Http\Controllers\Dashboard\ContactController::class, 'destroy'])
    ->name('contact.destroy');
