<?php

use Illuminate\Support\Facades\Route;
use Cowsayphp\Farm;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/marc', function() {
    $dragon = Farm::create(\Cowsayphp\Farm\Dragon::class);
    echo '<pre>'.$dragon->say("Marc is ready!").'</pre>';
});


Route::get('/george', function() {
    $dragon = Farm::create(\Cowsayphp\Farm\Dragon::class);
    echo '<pre>'.$dragon->say("Roll for initiative").'</pre>';
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
