<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Burger King - Food Website Template</title>
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


        <!-- About Start -->
        <div class="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="img/about.jpg" alt="Image">
                            <button type="button" class="btn-play" data-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-target="#videoModal">
                                <span></span>
                            </button>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-header">
                                <p>About Us</p>
                                <h2>Cooking Since 1990</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem.
                                </p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                                </p>
                                <a class="btn custom-btn" href="">Book A Table</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        
        <!-- Video Modal Start-->
        <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>        
                        <!-- 16:9 aspect ratio -->
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
        <!-- Video Modal End -->

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
