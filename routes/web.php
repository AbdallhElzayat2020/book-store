<?php

use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\AuthController::class)->middleware('guest')
    ->group(function () {
        Route::get('login', 'loginPage')->name('login');
        Route::post('login', 'login')->name('login.post');
        Route::get('register', 'registerPage')->name('register');
        Route::post('register', 'register')->name('register.post');
    });

Route::get('logout', [\App\Http\Controllers\AuthController::class, 'logout'])->middleware('auth')
    ->name('logout');

// Home page
Route::get('', [\App\Http\Controllers\Website\HomeController::class, 'index'])
    ->name('home');

// Send contacts
Route::post('contact', [\App\Http\Controllers\Website\HomeController::class, 'contact'])
    ->name('contact');

// Book routes
Route::get('books', [\App\Http\Controllers\Website\BookController::class, 'index'])
    ->name('books.index');
Route::get('books/callback', [\App\Http\Controllers\Website\BookController::class, 'callback'])
    ->name('books.callback');
Route::get('books/my-books', [\App\Http\Controllers\Website\BookController::class, 'myBooks'])
    ->name('books.my-books')->middleware('auth');
Route::get('books/{book}', [\App\Http\Controllers\Website\BookController::class, 'show'])
    ->name('books.show');
Route::get('books/{book}/pay', [\App\Http\Controllers\Website\BookController::class, 'pay'])
    ->name('books.pay')->middleware('auth');
Route::get('books/{book}/open', [\App\Http\Controllers\Website\BookController::class, 'open'])
    ->name('books.open');

// Profile routes
Route::get('profile', [\App\Http\Controllers\Website\ProfileController::class, 'index'])
    ->name('profile');
Route::post('profile', [\App\Http\Controllers\Website\ProfileController::class, 'update'])
    ->name('profile.update');


// Dashboard routes
Route::prefix('dashboard')->name('dashboard.')->middleware('check-admin')
    ->group(function () {
        include 'dashboard.php';
    });
