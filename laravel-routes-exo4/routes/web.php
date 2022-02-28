<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("Welcome");
});

// Route::get('/{var1}', function ($var1) {
//     $var1 = "fraises";
//     return view("/pages/about", compact('var1'));
// });

// // http://127.0.0.1:8000/contact/a/b/c
// // http://127.0.0.1:8000/contact/0493473493/assbaimane@hotmail.com/bruxelles
// Route::get('/{tel}/{mail}/{adresse}', function ($tel,$mail,$adresse) {
    
//     return view("/pages/contact", compact('tel','mail','adresse'));
// });

// Route::get("/coding", function () {
//     $prenoms = array("Maxime", "Elias", "Nicolas", "Ayhan", "Cactus");
//     $personne = (object)[
//         "nom" => "Coding",
//         "prenom" => "Elias",
//         "age" => 25
//     ];
//     return view("pages.coding", compact("prenoms", "personne"));
// });