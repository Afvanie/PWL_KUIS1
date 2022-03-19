<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>{{ config('customer.name', $title) }}</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="style/img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

        <link href="{{ asset('style/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('style/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('style/lib/flaticon/font/flaticon.css') }}" rel="stylesheet">
        <link href="{{ asset('style/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="{{ asset('style/css/style.css') }}" rel="stylesheet">

    </head>

    <body>
        <!-- Nav Bar Start -->
        @include('layouts.header')
        <!-- Nav Bar End -->

        
        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        @yield('content')
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

        <!-- Footer Start -->

        @include('layouts.footer')
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('style/lib/easing/easing.min.js') }}" defer></script>
        <script src="{{ asset('style/lib/owlcarousel/owl.carousel.min.js') }}" defer></script>
        <script src="{{ asset('style/lib/tempusdominus/js/moment.min.js') }}" defer></script>
        <script src="{{ asset('style/lib/tempusdominus/js/moment-timezone.min.js') }}" defer></script>
        <script src="{{ asset('style/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}" defer></script>
        
        <!-- Contact Javascript File -->
        <script src="{{ asset('style/mail/jqBootstrapValidation.min.js') }}" defer></script>
        <script src="{{ asset('style/mail/contact.js') }}" defer></script>

        <!-- Template Javascript -->
        <script src="{{ asset('style/js/main.js') }}" defer></script>
    </body>
</html>
