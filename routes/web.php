<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

// Landing Page
Route::get('/', [LandingController::class, 'index'])->name('landing.home');
Route::get('/about', [LandingController::class, 'about'])->name('landing.about');
Route::get('/features', [LandingController::class, 'feature'])->name('landing.features');
Route::get('/courses', [LandingController::class, 'course'])->name('landing.courses');
Route::get('/blog', [LandingController::class, 'blog'])->name('landing.blog');
Route::get('/contact', [LandingController::class, 'contact'])->name('landing.contact');

// Admin
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/login', [AdminController::class, 'login'])->name('login');
    Route::get('/form-elements', [AdminController::class, 'formElements'])->name('form-elements');
    Route::get('/table-plugins', [AdminController::class, 'tablePlugins'])->name('table-plugins');
    Route::get('/calendar', [AdminController::class, 'calendar'])->name('calendar');
    Route::get('/modal-notification', [AdminController::class, 'modalNotification'])->name('modal-notification');
});
