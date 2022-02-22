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

// 2. Créez une route qui renvoi une string "Bonjour chers utilisateurs"
Route::get('/acceuil', function () {
    return "Bonjour chers utilisateurs";
});


// 3. Créez une route dynamique qui renvoi "Bienvenue sur mon site"
// Route::get('/{variable}', function () {
//     return "Bienvenue sur mon site";
// });

// 4. Créez une route dynamique qui renvoi "Hello" + ce qui a été écrit dans la variable de la route
Route::get('/{prenom}', function ($prenom) {
    return "Hello ".$prenom;
});

// # Exercice 2
// 1. Conservez le fichier welcome et créez un second fichier about dans les views ok
// 2. Créez une route pour chaque fichier /welcome et /about ok
// 3. Dans chaque fichier mettre un h1 je suis sur la page welcome/about
// 4. Créer une navigation qui permet d'aller d'une page a l'autre