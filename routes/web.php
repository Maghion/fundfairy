<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\BlogPostsController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
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
//Route::get('/about', function () {
//    return view('about'); // Loads the Blade file2
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

Route::get('/elise', function() {
    $penguin = Farm::create(\Cowsayphp\Farm\Tux::class);
    echo '<pre>'.$penguin->say("Elise is ready! (And I'm a penguin now.)").'</pre>';
});
