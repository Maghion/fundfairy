<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookmarkController;
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
use App\Http\Middleware\LogRequest;
use App\Http\Controllers\DashboardController;

use Illuminate\Support\Facades\Route;
use Cowsayphp\Farm;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(LogRequest::class);

//USERS ROUTES
Route::resource('users', UserController::class);
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
//Route::get('/users/create', [UserProfileController::class, 'create']);
//Route::post('/users', [UserProfileController::class, 'store']);
Route::resource('business-review',BusinessReviewController::class);
Route::get('/businesses/{id}/save', [BusinessController::class, 'save'])->name('jobs.save');
Route::resource('businesses', BusinessController::class);

Route::middleware('auth')->group(function () {
    Route::get('/donation', [DonationController::class, 'index'])->name('donation.index');
    Route::get('/donation/create', [DonationController::class, 'create'])->name('donation.create');
    Route::get('/donation/{donation}/edit', [DonationController::class, 'edit'])->name('donation.edit');
    Route::delete('/donation/{donation}', [DonationController::class, 'destroy'])->name('donation.destroy');
});
Route::post('/donation', [DonationController::class, 'store'])->name('donation.store');
Route::put('/donation/{donation}', [DonationController::class, 'update'])->name('donation.update');


Route::resource('comment', CommentController::class);
Route::resource('donation-request', DonationRequestController::class);
Route::resource('blog-posts', BlogPostsController::class);
Route::resource('testimonial', TestimonialController::class);
Route::resource('about', AboutController::class);
Route::resource('newsletter', NewsletterController::class);

//Login And Register routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/bookmark/{donationRequest}', [BookmarkController::class, 'store'])
    ->name('bookmarks.store');
Route::post('/bookmark/{donationRequest}', [BookmarkController::class, 'store'])
    ->middleware('auth')
    ->name('bookmarks.store');
Route::get('/bookmark', [BookmarkController::class, 'index'])->name('bookmarks.index');



//Route::get('/about', function () {
//    return view('about'); // Loads the Blade file
//});


Route::get('/privacypolicy', function() {
    $title = 'Privacy Policy';
    return view('pages.privacypolicy', compact('title'));
//     return view('PrivacyPolicy.index' , compact('title'));
});




