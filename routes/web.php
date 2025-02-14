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

Route::get('/anton', function() {
    $cow = Farm::create(\Cowsayphp\Farm\Cow::class);
    echo '<pre>'.$cow->say("Anton is ready!").'</pre>';
});
