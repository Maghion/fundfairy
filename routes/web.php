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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lillian', function () {
    $dragon = Farm::create(\Cowsayphp\Farm\dragon::class);
    echo '<pre>' . $dragon->say("Howdy, Lillian is ready!") . '</pre>';
});

