<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ResourceController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/dashboard', function () {
//     return 'Admin Dashboard Works!';
// })->name('dashboard');

Route::middleware(['auth','is_admin'])->group(callback: function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('blogs', BlogController::class);
    Route::delete('/blogs/{blog}/remove-image', [BlogController::class, 'removeImage'])->name('blogs.removeImage');

    Route::resource('users', UserController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('resources', ResourceController::class);

});

