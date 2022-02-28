<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("Welcome");
});

Route::get('/about', function () {
    return view("/pages/about");
});

Route::get('/services', function () {
    return view("/pages/services");
});