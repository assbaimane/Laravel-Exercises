<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap"
        rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css')}}>
    <title>Portfolio</title>

    <link rel="stylesheet" href={{ asset("css/sidebar.css") }}>
    <link rel="stylesheet" href={{ asset('css/fontawesome.css') }}>

</head>

<body>
    @include('back/partials/sidebar')
    <script src={{ asset("js/app.js") }}></script>

</body>
</html>
