<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

//Auth::routes();

//Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
