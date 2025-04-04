<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\BlogPostsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BusinessReviewController;
use App\Http\Controllers\DonationRequestController;
use App\Http\Controllers\TestimonialController;

use Illuminate\Support\Facades\Route;
use Cowsayphp\Farm;

Route::get('/', [HomeController::class, 'index']);

//USERS ROUTES
Route::resource('users', UserController::class);
//Route::get('/users/create', [UserProfileController::class, 'create']);
//Route::post('/users', [UserProfileController::class, 'store']);
Route::resource('business-review',BusinessReviewController::class);
Route::get('/businesses/{id}/save', [BusinessController::class, 'save'])->name('jobs.save');
Route::resource('businesses', BusinessController::class);
Route::resource('donation', DonationController::class);
Route::resource('comment', CommentController::class);
Route::resource('donation-request', DonationRequestController::class);
Route::resource('blog-posts', BlogPostsController::class);
Route::resource('testimonial', TestimonialController::class);
Route::resource('about', AboutController::class);
Route::resource('newsletter', NewsletterController::class);

//Login And Register routes

Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
//Route::get('/about', function () {
//    return view('about'); // Loads the Blade file
//});


