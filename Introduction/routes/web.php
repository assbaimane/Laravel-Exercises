<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route principale : http://127.0.0.1:8000/

Route::get('/', function () {
    return "Bonjour à tous";
});

Route::get('/30Exo', function(){

// VOIR CE COURS / ------->
// https://apprendre-php.com/tutoriels/tutoriel-6-les-variables.html


    // 0. Afficher du texte dans le terminal
    // echo "hello";

    // 1. Faire un commentaire à une ligne
    // echo "hello";

    /* 2. Faire un commentaire à plusieurs lignes
     echo "hello";*/

    // 3. Déclarer un string / integer / float / boolean
    // $hello = "Bonjour la team";
    // $integer = 10;
    // $float = 10.02;
    // $bool = false;

    // 4. Convention d'écriture d'une variable
    // $hello = "Bonjour la team";

    // 5. Concatenation de 2 variables
    // $prenom = 'Yass';
    // $nom = 'Oumah';
    // $identite = '';
    // $identite = $prenom .' '. $nom;


    // 6. Opérateurs logiques
    // $a = 10;
    // $b = 2;
    // $c = 0;
    // // $c vaut 10+2 = 12
    // $c = $a + $b;
    // // $c vaut 10x2 = 20
    // $c = $a * $b;
    // // $c vaut 10/2 = 5
    // $c = $a / $b;
    // // $c vaut 10-2 = 8
    // $c = $a - $b;
    // // $c vaut le reste de la division de $a par $b soit 0
    // $c = $a % $b;

    // 7. Incrémentation de 1
    // $a++;

    // 8. Décrémentation de 1
    // $b--;

    // 9. Création d'un tableau

    
    // 10. Afficher la première donnée d'un tableau
    // 11. Faire une condition
    // 12. Condition ternaire
    // 13. Condition switch
    // 14. While
    // 15. For
    // 16. Foreach
    // 17. Créer un objet
    // 18. Afficher une propriété de l'objet
    // 19. Création d'une fonction
    // 20. Créer une phrase
    // 21. Rendre la phrase en majuscule
    // 22. Remplacer une lettre par une autre
    // 23. Savoir le nombre caractères d'une phrase
    // 24. Rendre la phrase en minuscule
    // 25. Faire une soustraction de lettres dans la phrase
    // 26. Affiche la valeur absolue d'un nombre
    // 27. Retourne la plus grande valeur d'un tableau avec des nombres
    // 28. Retourne la plus petite valeur d'un tableau avec des nombres
    // 29. Retourne un nombre aléatire
    // 30. Arrondir le nombre

    return "";
});











//---------------------------------------------------------------
Route::get('/articles', function(){
    $nom = "Assbai";
    $prenom = "Imane";
    if ($nom === "Assbai"){
        return "Hello Imane";
    }
    else{
        return "Hello inconnu";
    }
    // dd($prenom);
    return $nom . $prenom;
});

Route::get('/ternaire', function(){
    $nom = "Assbai";
    $prenom = "Imane"; //Si je change le prénom c'est pas ok
    $result = $prenom === "Imane" ? "T'es la bonne personne" : "Tu es qui?";
    return $result;
});

Route::get('/{utilisateur}', function($utilisateur){
    return $utilisateur;
});

Route::get('/{nom}/{prenom}/{age}', function($nom,$prenom,$age){
    return "Hello " . $nom . " " . $prenom . ", tu as " . $age . " ans";
});
// Route : http://127.0.0.1:8000/Oumah/Yassin/25