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
use App\Http\Middleware\LogRequest;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;
use Cowsayphp\Farm;

//test error page:
Route::get('/error/403', function () {
    abort(403);
});
Route::get('/error/500', function () {
    abort(500);
});
Route::get('/error/413', function () {
    abort(413);
});

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(LogRequest::class);

//USERS ROUTES
Route::resource('users', UserController::class);
//Route::get('/users/create', [UserProfileController::class, 'create']);
//Route::post('/users', [UserProfileController::class, 'store']);

//DASHBOARD
if (request()->query('from') === 'dashboard') {
    return redirect()->route('dashboard.index')->with('success', 'Job listing deleted successfully!');
}
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//PROFILE
Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

Route::get('/business-review/create/{business}', [BusinessReviewController::class, 'create'])->name('business-review.create');
Route::resource('business-review',BusinessReviewController::class)->except(['create']);

Route::get('/businesses/{id}/save', [BusinessController::class, 'save'])->name('jobs.save');
Route::resource('businesses', BusinessController::class);
//Route::resource('businesses', BusinessController::class)->middleware('auth')->only(['create', 'edit', 'destroy']);
//Route::resource('businesses', BusinessController::class)->except(['create', 'edit', 'destroy']);

//Route::middleware('auth')->group(function () {
////    Route::get('/donation', [DonationController::class, 'index'])->name('donation.index');
//    Route::get('/donation/{donation}/edit', [DonationController::class, 'edit'])->name('donation.edit');
//    Route::delete('/donation/{donation}', [DonationController::class, 'destroy'])->name('donation.destroy');
//});

Route::get('/donation/create/{donationRequest}', [DonationController::class, 'create'])->name('donation.create');
Route::post('/donation', [DonationController::class, 'store'])->name('donation.store');
Route::put('/donation/{donation}', [DonationController::class, 'update'])->name('donation.update');

Route::middleware(['auth'])->group(function () {
    Route::get('/donation', [DonationController::class, 'index'])->name('donation.index')->middleware('can:view-all-donations');
    Route::get('/donation/{donation}/edit', [DonationController::class, 'edit'])->name('donation.edit')->middleware('can:edit-donations');
    Route::delete('/donation/{donation}', [DonationController::class, 'destroy'])->name('donation.destroy')->middleware('can:delete-donations');
});

Route::delete('/users/{user}',[UserController::class, 'destroy'])->name('users.destroy');

Route::get('/comment/create/{donationRequest}', [CommentController::class, 'create'])->name('comment.create');
Route::resource('comment', CommentController::class)->except(['create']);

Route::resource('donation-request', DonationRequestController::class);

Route::resource('blog-posts', BlogPostsController::class)->middleware('auth')->only(['create', 'store', 'edit', 'update', 'destroy']);
Route::resource('blog-posts', BlogPostsController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);


Route::resource('testimonial', TestimonialController::class)->middleware('auth')->only(['create', 'store', 'edit', 'update', 'destroy']);
Route::resource('testimonial', TestimonialController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);
Route::resource('about', AboutController::class);

Route::get('/newsletter', [NewsletterController::class, 'index'])->name('newsletter.index');
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.store');

//Login And Register routes
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');


//Route::get('/about', function () {
//    return view('about'); // Loads the Blade file
//});


Route::get('/privacypolicy', function() {
    $title = 'Privacy Policy';
    return view('pages.privacypolicy', compact('title'));
//     return view('PrivacyPolicy.index' , compact('title'));
});

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});


