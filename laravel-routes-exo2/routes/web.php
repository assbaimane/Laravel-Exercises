<?php

use Illuminate\Support\Facades\Route;


// # Exercice 1
// 1. Vous allez créer un dossier laravel sous le nom de "laravel-routes-exo1"

Route::get('/', function () {
    return view("Navigation");
});

Route::get('/welcome', function () {
    return view("Welcome");
});

Route::get('/about', function () {
    return view("About");
});

// # Exerxcice 3
// 1. Vous allez créer un dossier laravel sous le nom "laravel-routes-exo2"
// 2. Dans la view about, envoyez grâce a la méthode compact une variable "prenom" et une "nom" les afficher en suite leur contenu sur la page