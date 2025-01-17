<?php

// routes/front.php

use App\Http\Controllers\Gym\FaqController;
use App\Http\Controllers\Gym\HomeController;
use App\Http\Controllers\Gym\AboutController;
use App\Http\Controllers\Gym\LoginController;
use App\Http\Controllers\Gym\ClassesController;
use App\Http\Controllers\Gym\ContactController;
use App\Http\Controllers\Gym\GalleryController;
use App\Http\Controllers\Gym\PricingController;
use App\Http\Controllers\Gym\RegisterController;
use App\Http\Controllers\Gym\ServicesController;
use App\Http\Controllers\Gym\TrainersController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

Route::get('/', [HomeController::class, 'index'])->name('gym.pages.home');

Route::get('/about', [AboutController::class, 'index'])->name('gym.pages.about');

Route::get('/contact', [ContactController::class, 'index'])->name('gym.pages.contact');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gym.pages.gallery');

Route::get('/classes', [ClassesController::class, 'index'])->name('gym.pages.classes');

Route::get('/faq', [FaqController::class, 'index'])->name('gym.pages.faq');

Route::get('/pricing', [PricingController::class, 'index'])->name('gym.pages.pricing');

Route::get('/services', [ServicesController::class, 'index'])->name('gym.pages.services');

Route::get('/trainers', [TrainersController::class, 'index'])->name('gym.pages.trainers');

Route::get('/login', [LoginController::class, 'index'])->name('gym.pages.login');

Route::get('/register', [RegisterController::class, 'index'])->name('gym.pages.register');
Route::post('/register/user', [RegisterController::class, 'registerUser'])->name('register.user');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect()->route('gym.pages.home')->with('success', 'Your email has been verified successfully!');
})->middleware(['signed'])->name('verification.verify');