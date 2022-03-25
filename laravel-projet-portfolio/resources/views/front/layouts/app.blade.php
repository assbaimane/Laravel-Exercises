<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
      <title>iPortfolio Bootstrap Template - Index</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
    
      <!-- Favicons -->
      <link href={{ asset("img/favicon.png") }} rel="icon">
      <link href={{ asset("img/apple-touch-icon.png") }} rel="apple-touch-icon">
    
      <!-- Google Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    
      <!-- Vendor CSS Files -->
      <link href={{ asset("css/aos.css") }} rel="stylesheet">
      <link href={{ asset("css/bootstrap.min.css") }} rel="stylesheet">
      <link href={{ asset("css/bootstrap-icons.css") }} rel="stylesheet">
      <link href={{ asset("css/boxicons.min.css") }} rel="stylesheet">
      <link href={{ asset("css/glightbox.min.css") }} rel="stylesheet">
      <link href={{ asset("css/swiper-bundle.min.css") }} rel="stylesheet">
    
      <!-- Template Main CSS File -->
      <link href={{ asset("css/style.css") }} rel="stylesheet">
      <!-- =======================================================
      * Template Name: iPortfolio - v3.7.0
      * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
      * Author: BootstrapMade.com
      * License: https://bootstrapmade.com/license/
      ======================================================== -->
   </head>
      <body data-aos-easing="ease-in-out" data-aos-duration="1000" data-aos-delay="0">
       
         <main id="main">       
              @yield('content')
         </main>

         {{-- Button to return on top of the page --}}
         <a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="bi bi-arrow-up-short"></i></a>
       
         <!-- Vendor JS Files -->
         <script src={{ asset("js/purecounter.js.map") }}></script>
         <script src={{ asset("js/aos.js") }}></script>
         <script src={{ asset("js/bootstrap.bundle.min.js") }}></script>
         <script src={{ asset("js/glightbox.min.js") }}></script>
         <script src={{ asset("js/isotope.pkgd.min.js") }}></script>
         <script src={{ asset("js/swiper-bundle.min.js") }}></script>
         <script src={{ asset("js/typed.min.js") }}></script>
         <script src={{ asset("js/noframework.waypoints.js") }}></script>
         <script src={{ asset("js/php-email-form/validate.js") }}></script>
       
         <!-- Template Main JS File -->
         <script src={{ asset("js/main.js") }}></script><style type="text/css" data-typed-js-css="true">
               .typed-cursor{
                 opacity: 1;
               }
               .typed-cursor.typed-cursor--blink{
                 animation: typedjsBlink 0.7s infinite;
                 -webkit-animation: typedjsBlink 0.7s infinite;
                         animation: typedjsBlink 0.7s infinite;
               }
               @keyframes typedjsBlink{
                 50% { opacity: 0.0; }
               }
               @-webkit-keyframes typedjsBlink{
                 0% { opacity: 1; }
                 50% { opacity: 0.0; }
                 100% { opacity: 1; }
               }
             </style>
       </body>
</html>
