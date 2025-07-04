<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::prefix('admin')
    ->as('admin.')
    ->group(function () {
        require base_path('routes/admin.php');
    });

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Auth::routes(['register' => false]);

// Route::get('/dashboard/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
