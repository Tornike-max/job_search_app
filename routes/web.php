<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SessionController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\Search\SearchController;
use App\Http\Controllers\Search\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JobController::class, 'index'])->name('home');
Route::get('/search', SearchController::class);
Route::get('/tags/{tag:name}', [TagController::class, '__invoke'])->name('tagname');


Route::get('/jobs/create', [JobController::class, 'create'])->name('jobs.create');
Route::post('/jobs/store', [JobController::class, 'store'])->name('jobs.store');



Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('registerpage');
    Route::post('/register', [RegisterController::class, 'store'])->name('register');
    Route::get('/login', [SessionController::class, 'create'])->name('loginpage');
    Route::post('/login', [SessionController::class, 'store'])->name('login');
});

Route::delete('/logout', [SessionController::class, 'destroy'])->name('logout');
