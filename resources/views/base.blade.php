<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Student Dashboard 2021</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}" >
    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/font-awesome.min.css')}}">
    <!-- Icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/fonts/simple-line-icons.css')}}">
    <!-- Slicknav -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slicknav.css')}}">
    <!-- Menu CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/menu_sideslide.css')}}">
    <!-- Slider CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slide-style.css')}}">
    <!-- Nivo Lightbox -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/nivo-lightbox.css')}}" >
    <!-- Animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/animate.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
    <!-- Responsive Style -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">

    <style type="text/css">
        .footer {
    background-color: #cdcdcd;
    height: 50px;
    text-align: center;
    font-size:10px;
    color:rgb(3, 3, 3);
    font-family:Verdana;
    padding-top: 10px;
    width: 100%;
    position:fixed;
    left: 0px;
    bottom: 0px;
    }
        </style>
        <!--[if lte IE 6]>
        <style type="text/css">
        body {height:100%; overflow-y:auto;}
        html {overflow-x:auto; overflow-y:hidden;}
        * html .footer {position:absolute;}
        </style>
        <![endif]-->

  </head>
  <body>

    <!-- Header Area wrapper Starts -->
    <header id="header-wrap">
      <!-- Navbar Start -->
      <nav class="navbar navbar-expand-lg fixed-top scrolling-navbar indigo">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
              <span class="icon-menu"></span>
            </button>
            <a href="index.html" class="navbar-brand"><img src="assets/img/logo1.png" alt=""></a>
          </div>
          <div class="collapse navbar-collapse" id="main-navbar">
            <ul class="onepage-nev navbar-nav mr-auto w-100 justify-content-end clearfix">
              <li class="nav-item active">
                <a class="nav-link" href="#hero-area">
                  Home
                </a>
            </ul>
          </div>
        </div>

        <!-- Mobile Menu Start -->
        <ul class="onepage-nev mobile-menu">

        <!-- Mobile Menu End -->
      </nav>
      <!-- Navbar End -->

      <!-- Hero Area Start -->
      <div id="hero-area" class="hero-area-bg">
        <div class="overlay"></div>
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
              <div class="contents">
                <h5 class="script-font wow fadeInUp" data-wow-delay="0.2s">Welcome to</h5>
                <h2 class="head-title wow fadeInUp" data-wow-delay="0.4s">Student Dashboard</h2>
                <p class="script-font wow fadeInUp" data-wow-delay="0.6s">2021</p>
                <ul class="social-icon wow fadeInUp" data-wow-delay="0.8s">
                  <li>
                    <a class="facebook" href="#"><i class="icon-social-facebook"></i></a>
                  </li>
                  <li>
                    <a class="twitter" href="#"><i class="icon-social-twitter"></i></a>
                  </li>
                  <li>
                    <a class="instagram" href="#"><i class="icon-social-instagram"></i></a>
                  </li>
                  <li>
                    <a class="linkedin" href="#"><i class="icon-social-linkedin"></i></a>
                  </li>
                  <li>
                    <a class="google" href="#"><i class="icon-social-google"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero Area End -->

    </header>
    <!-- Header Area wrapper End -->
    <div class="container">
        <br><br><br>
        @yield('main')
        <br><br><br><br><br><br>
      </div>

    <!-- Footer Section Start -->
    <br><br><br>
    <div class="footer">
        <p>Copyright © 2021 Students Dashboard All Right Reserved</p>
      </div>
    <!-- Footer Section End -->

    <!-- Go to Top Link -->
    <a href="#" class="back-to-top">
      <i class="icon-arrow-up"></i>
    </a>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('assets/js/jquery-min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery.mixitup.js')}}"></script>
    <script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/waypoints.min.js')}}"></script>
    <script src="{{asset('assets/js/wow.js')}}"></script>
    <script src="{{asset('assets/js/jquery.nav.js')}}"></script>
    <script src="{{asset('assets/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/js/nivo-lightbox.js')}}"></script>
    <script src="{{asset('assets/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/js/contact-form-script.min.js')}}"></script>
    <script src="{{asset('assets/js/map.js')}}"></script>

  </body>
</html>
