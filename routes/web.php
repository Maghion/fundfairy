<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserProfileController;
use Illuminate\Support\Facades\Route;
use Cowsayphp\Farm;

Route::get('/', [HomeController::class, 'index']);

//USERS ROUTES
Route::resource('users', UserProfileController::class);
Route::get('/users/create', [UserProfileController::class, 'create']);
Route::post('/users', [UserProfileController::class, 'store']);

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

//update
Route::get('/mireille', function() {
    $cow = Farm::create(\Cowsayphp\Farm\Dragon::class);
    echo '<pre>'.$cow->say("Mimi is ready!").'</pre>';
});

Route::get('/elise', function() {
    $penguin = Farm::create(\Cowsayphp\Farm\Tux::class);
    echo '<pre>'.$penguin->say("Elise is ready! (And I'm a penguin now.)").'</pre>';
});

