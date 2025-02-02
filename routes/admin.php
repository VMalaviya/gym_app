<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PackageController;
use App\Http\Controllers\Admin\DashboardController;

Route::middleware('RedirectIfAdmins')->group(function () {
    Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
    Route::post('/admin/login', [LoginController::class, 'login'])->name('login.admin');
});

Route::middleware('auth')->group(function(){
    Route::get('/admin/logout', [LoginController::class, 'logout'])->name('logout.admin');
    Route::resource('/admin/dashboard', DashboardController::class);
    Route::resource('/admin/user', UserController::class);
    Route::get('/admin/trainers', [UserController::class, 'getTrainers'])->name('user.trainer');
    Route::resource('/admin/package', PackageController::class);
});
