<?php

use Illuminate\Support\Facades\Route;


// # Exercice 1
// 1. Vous allez créer un dossier laravel sous le nom de "laravel-routes-exo1"

Route::get('/', function () {
    return view("Navigation");
});

Route::get('/{prenom}/{nom}', function ($prenom,$nom) {
    return view("Welcome",compact('prenom','nom'));
});


// # Exerxcice 4
// 1. Dans un nouveau projet laravel-route-exo3
// 2. Videz le contenu de la page welcome
// 3. Ajoutez une structure html de base
// 4. Modifiez la route de base en route dynamique avec 2 variables
// 5. Affichez le contenu de ces deux variables dans la page welcome