<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href={{ asset('css/app.css') }}>
    <link rel="stylesheet" href={{ asset('sass/app.sass') }}>
    <title>CodingSchool</title>
</head>

<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <script src={{ asset('js/app.js') }}></script>
    <script src={{ asset('js/perso.js') }}></script>
</body>

</html>
