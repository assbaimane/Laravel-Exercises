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
    <link rel="stylesheet" href={{ asset('css/bootstrap.min.css')}}>
    <title>SEO Dream - Creative SEO HTML5 Template by TemplateMo</title>

    <!-- Bootstrap core CSS -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href={{ asset('css/fontawesome.css') }}>
    <link rel="stylesheet" href={{ asset("css/templatemo-seo-dream.css") }}>
    <link rel="stylesheet" href={{ asset("css/animated.css") }}>
    <link rel="stylesheet" href={{ asset("css/owl.css") }}>

</head>

<body>
    <!-- ***** Preloader Start ***** -->
    {{-- <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div> --}}
    <!-- ***** Preloader End ***** -->
    @yield('content')
    <!-- Scripts -->
    <script src={{ asset("js/app.js") }}></script>
    <script src={{ asset("js/jquery.min.js") }}></script>
    <script src={{ asset("js/bootstrap.bundle.min.js") }}></script>
    <script src={{ asset("js/owl-carousel.js") }}></script>
    <script src={{ asset("js/animation.js") }}></script>
    <script src={{ asset("js/imagesloaded.js") }}></script>
    <script src={{ asset("js/custom.js") }}></script>
    <script src={{ asset("js/tabs.js") }}></script>
    <script src={{ asset("js/isotope.js") }}></script>

</body>
</html>
