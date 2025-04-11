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

use Illuminate\Support\Facades\Route;
use Cowsayphp\Farm;

Route::get('/', [HomeController::class, 'index'])->name('home')->middleware(LogRequest::class);

//USERS ROUTES
Route::resource('users', UserController::class);
//Route::get('/users/create', [UserProfileController::class, 'create']);
//Route::post('/users', [UserProfileController::class, 'store']);
Route::resource('business-review',BusinessReviewController::class);
Route::get('/businesses/{id}/save', [BusinessController::class, 'save'])->name('jobs.save');
Route::resource('businesses', BusinessController::class);
Route::resource('donation', DonationController::class)->middleware('auth')->only(['create', 'edit', 'destroy']);
Route::resource('donation', DonationController::class)->except(['create', 'edit', 'destroy']);

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


//Route::get('/about', function () {
//    return view('about'); // Loads the Blade file
//});


Route::get('/privacypolicy', function() {
    $title = 'Privacy Policy';
    return view('pages.privacypolicy', compact('title'));
//     return view('PrivacyPolicy.index' , compact('title'));
});


Route::get('/marc', function() {
    $dragon = Farm::create(\Cowsayphp\Farm\Dragon::class);
    echo '<pre>'.$dragon->say("Marc is ready!").'</pre>';
});

Route::get('/michelle', function() {
    $dragon = Farm::create(\Cowsayphp\Farm\Tux::class);
    echo '<pre>'.$dragon->say("Michelle is ready!").'</pre>';
});

Route::get('/anton', function() {
    $Cow = Farm::create(\Cowsayphp\Farm\Cow::class);
    echo '<pre>'.$Cow->say("Anton is ready!").'</pre>';
});

Route::get('/george', function() {
    $dragon = Farm::create(\Cowsayphp\Farm\Dragon::class);
    echo '<pre>'.$dragon->say("Roll for initiative").'</pre>';
});

Route::get('/keren', function() {
    $dragon = Farm::create(\Cowsayphp\Farm\Whale::class);
    echo '<pre>'.$dragon->say("Keren is ready!").'</pre>';
});

Route::get('/lillian', function () {
    $dragon = Farm::create(\Cowsayphp\Farm\Dragon::class);
    echo '<pre>' . $dragon->say("Howdy, Lillian is ready!") . '</pre>';
});

Route::get('/mireille', function() {
    $cow = Farm::create(\Cowsayphp\Farm\Dragon::class);
    echo '<pre>'.$cow->say("Mimi is ready!").'</pre>';
});

