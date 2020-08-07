<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

        <!-- Styles -->
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    </head>
    <body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">
              <h1 class="logo mr-auto"><a href="index.html">Worktrees</a></h1>
              <nav class="nav-menu d-none d-lg-block">
                <ul>
                  <li class="active"><a href="index.html">Home</a></li>
                  <li><a href="#programs">Programs</a></li>
                  <li><a href="#articles">Articles</a></li>
                  <li><a href="#testimonials">Testimonials</a></li>
                  <!-- <li><a href="#contact">Contact</a></li> -->
                </ul>
              </nav>
            </div>
        </header>
        <!-- End Header -->

        @yield('content')

        <!-- ======= Footer ======= -->
        <footer id="footer">
            <div class="container d-md-flex py-4">

              <div class="mr-md-auto text-center text-md-left">
                <div class="copyright">
                  &copy; Copyright <strong><span>Worktrees</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                  Designed by <a href="#">Worktrees</a>
                </div>
              </div>
              <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
        </footer>
        <!-- End Footer -->

        <!-- Scripts -->
        <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
        <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
        <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('vendor/aos/aos.js') }}"></script>

        <!-- Template Main JS File -->
        <script src="{{ asset('js/app.js') }}"></script>

        <script type="text/javascript">
        $(document).ready(function () {

            $("#theme-switch1").click(function() {
                $(".section-title h2").addClass('dark-text');
                $(".section-title h2").removeClass('light-text');
                $(".switch-button").addClass('dark-all');
                $(".switch-button").removeClass('light-all');
                $(".switch-label1").addClass('light-all');
                $(".switch-label1").removeClass('dark-all');
                $(".portfoio").addClass('light-all');
                $(".portfoio").removeClass('dark-all');
                $(".portfolio-info").addClass('dark-all');
                $(".portfolio-info").removeClass('light-all');
                $("#portfolio-flters li:hover, .filter-active").addClass('dark-all');
                $("#portfolio-flters li:hover, .filter-active").removeClass('light-all');
            });
            $("#theme-switch2").click(function() {
                $(".section-title h2").addClass('light-text');
                $(".section-title h2").removeClass('dark-text');
                $(".switch-button").addClass('light-all');
                $(".switch-button").removeClass('dark-all');
                $(".switch-label2").addClass('dark-all');
                $(".switch-label2").removeClass('light-all');
                $(".portfoio").addClass('dark-all');
                $(".portfoio").removeClass('light-all');
                $(".portfolio-info").addClass('light-all');
                $(".portfolio-info").removeClass('dark-all');
                $(".portfoio #portfolio-flters li:hover, .filter-active").addClass('light-all');
                $(".portfoio #portfolio-flters li:hover, .filter-active").removeClass('dark-all');
            });
        });
        </script>
    </body>
</html>
