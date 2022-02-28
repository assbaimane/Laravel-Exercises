<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        {{-- Exo6 --}}
        <h1>Page coding</h1>
        <h2>Les prénoms (tableau)</h2>
        <p>{{ $prenoms[0] }}</p>
        <p>{{ $prenoms[1] }}</p>
        <p>{{ $prenoms[2] }}</p>
        {{-- @map($prenoms)
            <div></div>
        @endmap --}}

        <p>Les personnes (classe/objet)</p>
        <p>{{ $personne->nom }}</p>

{{-- Exo7
        1. Vous allez créer 5 objets personne, et vous allez les placer dans un tableau et vous allez devoir le passer en compact dans la blade coding
        2. Vous allez faire une condition dans la boucle pour vérifier l'âge de chaque personne, et si la personne a plus de 18 ans, vous affichez dans l'html : Nom personne est majeur, ou sinon nom personne est mineur --}}

    </div>
</body>
</html>