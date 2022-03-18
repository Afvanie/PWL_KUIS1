<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Burger King - Food Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free Website Template" name="keywords">
        <meta content="Free Website Template" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Nunito:600,700" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="" rel="stylesheet">
        <link href="" rel="stylesheet">
        <link href="" rel="stylesheet">
        <link href="" rel="stylesheet" />

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

         <!-- Contact Start -->
         <div class="contact">
            <div class="container">
                <div class="section-header text-center">
                    <h2>Contact Us</h2>
                </div>
               @yield('content')
               <div class="row contact-form">
                    <div class="col-md-6">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63465.81146600292!2d106.80633704186508!3d-6.182491712395522!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f72aff20327b%3A0x693c61710d0a122!2sBurger%20King%20Cideng%20Jakarta!5e0!3m2!1sid!2sid!4v1647587216262!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div id="success"></div>
                        <form name="sentMessage" id="contactForm" novalidate="novalidate">
                            <div class="control-group">
                                <input type="text" class="form-control" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="email" class="form-control" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <input type="text" class="form-control" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group">
                                <textarea class="form-control" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <div>
                                <button class="btn custom-btn" type="submit" id="sendMessageButton">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
 
        

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
