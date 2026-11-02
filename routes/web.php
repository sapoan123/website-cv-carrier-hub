<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdvantageController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CaraBuatCvController;

// ─── Frontend ───
Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::post('/contact/send', [LandingPageController::class, 'sendContact'])->name('contact.send');

// ─── Admin ───
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('/about', AboutController::class)->except('show');
        Route::resource('/advantage', AdvantageController::class)->except('show');
        Route::resource('/service', ServiceController::class)->except('show');
        Route::resource('/testimonial', TestimonialController::class)->except('show');
        Route::resource('/faq', FaqController::class)->except('show');
        Route::resource('/cara-buat-cv', CaraBuatCvController::class)->except('show')->parameters(['cara-buat-cv' => 'step']);
        Route::resource('/contact', ContactController::class)->except('show');

        Route::get('/contact-message', [ContactMessageController::class, 'index'])->name('contact-message.index');
        Route::get('/contact-message/{contactMessage}', [ContactMessageController::class, 'show'])->name('contact-message.show');
        Route::patch('/contact-message/{contactMessage}/read', [ContactMessageController::class, 'markAsRead'])->name('contact-message.read');
        Route::delete('/contact-message/{contactMessage}', [ContactMessageController::class, 'destroy'])->name('contact-message.destroy');

        Route::resource('/user', UserController::class)->except('show');
    });
});
