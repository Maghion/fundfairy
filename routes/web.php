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

Route::get('/michelle', function() {
    $dragon = Farm::create(\Cowsayphp\Farm\Whale::class);
    echo '<pre>'.$dragon->say("Michelle is ready!").'</pre>';
});
