<?php

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
use Illuminate\Auth\Events\Verified;

Route::middleware('NotAuthenticated')->group(function(){
    Route::get('/login', [LoginController::class, 'index'])->name('gym.pages.login');
    Route::get('/register', [RegisterController::class, 'index'])->name('gym.pages.register');
});

Route::post('/login/user', [LoginController::class, 'loginUser'])->name('login.user');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register/user', [RegisterController::class, 'registerUser'])->name('register.user');

// Route to handle email verification
Route::get('/email/verify', function () {
    return view('gym.pages.verify-email');
})->middleware(['auth','NotEmailVerified'])->name('verification.notice');

Route::get('/email/verify/resend', function () {
    $user = Auth::user();
    if ($user && !$user->hasVerifiedEmail()) {
        // Check if a link has already been sent and not yet expired
        $lastVerificationSentAt = $user->email_verification_sent_at; // Create a column `email_verification_sent_at` in the `users` table
        $cooldownPeriod = now()->subMinutes(10); // Assuming 10 minutes expiry for the link

        if ($lastVerificationSentAt && $lastVerificationSentAt > $cooldownPeriod) {
            // If the link is still valid, don't resend it
            return view('gym.pages.resend-email',['warning'=>'A verification link']);
        }
        // Update the `email_verification_sent_at` and resend the email
        $user->update(['email_verification_sent_at' => now()]);
        $user->sendEmailVerificationNotification();

        return view('gym.pages.resend-email',['success'=>'A new verification link']);
    }
    return view('gym.pages.resend-email',['info'=>'Already verified email.']);
})->middleware(['auth','NotEmailVerified'])->name('verification.resend');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect()->route('gym.pages.home')->with('success', 'Your email has been verified successfully!');
})->middleware(['auth','signed'])->name('verification.verify');

Route::get('/gym/pages/welcome', function () {
    return view('gym.pages.welcome');
})->name('welcome');

Route::get('/', [HomeController::class, 'index'])->name('gym.pages.home');

Route::get('/about', [AboutController::class, 'index'])->name('gym.pages.about');

Route::get('/contact', [ContactController::class, 'index'])->name('gym.pages.contact');

Route::get('/gallery', [GalleryController::class, 'index'])->name('gym.pages.gallery');

Route::get('/classes', [ClassesController::class, 'index'])->name('gym.pages.classes');

Route::get('/faq', [FaqController::class, 'index'])->name('gym.pages.faq');

Route::get('/pricing', [PricingController::class, 'index'])->name('gym.pages.pricing');

Route::get('/services', [ServicesController::class, 'index'])->name('gym.pages.services');

Route::get('/trainers', [TrainersController::class, 'index'])->name('gym.pages.trainers');

Route::fallback(function(){
    return response()->view('gym.pages.404', ['message404' => 'The page you are looking for does not exist...!'], 404);
});