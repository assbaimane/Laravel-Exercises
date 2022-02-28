{{-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nani</title>
        <link rel="stylesheet" href="{{ asset("css/app.css") }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head> --}}

    {{-- <body class="antialiased"> --}}

{{-- # Exercice 5
1. Dans un nouveau projet Laravel-route-exo4
2. Dans views créer un dossier pages
3. Dans le dossier page créer 2 views about et contact
4. Créer deux routes dynamique vers ses pages
5. Pour about une route avec une variables
6. Pour contact une route avec trois variables
7. Dans chaque page créer un menu pour changer de page

Sur about affichez : un fruit qui vient de votre route
Sur contact affichez : nom, prénom numéro de téléphone qui viennent de la route --}}
@extends('layouts.app')
 @include('partials.nav')
    @section('content')
        <div class="text-center">
            <h1>Konnichiwa</h1>
            <h2>Ou voudrais tu aller? Fais ton choix !</h2>
            <div class="row">
                <a href="/telephone/mail/adresse">
                    <button>Contact us</button>
                </a>
                <a href="/about">
                    <button>About</button>
                </a>
                <a href="/coding">
                    <button>coding</button>
                </a>
            </div>
        </div>
    @include('partials.about')
@endsection
        {{-- <script src="{{ asset("js/app.js") }}"></script>
    </body>
</html> --}}
{{-- Voir correction elias --}}
{{-- # Exercice 6
1. Sur le même exercice, vous allez créer une route coding qui redirige vers une blade coding.blade.php dans le dossier pages
2. Vous allez créer un tableau "prenoms" et vous allez retourner chaque prénom dans la blade coding
3. Vous allez aussi créer un objet "personne" avec nom, prenom, age, commune et vous allez retourner chaque propriété dans la blade coding --}}