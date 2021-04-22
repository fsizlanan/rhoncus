<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{asset('assets/css/animate-3.7.0.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome-4.7.0.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-4.1.3.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/owl-carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/jquery.datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/stylefront.css')}}">
    <link rel="stylesheet" href="{{asset('assets/sweet-alert/sweetalert2.css')}}">
    @yield('css')
</head>
<body>
    <!-- Preloader Starts -->

        @include('layouts.preloader')

    <!-- Preloader End -->

    <!-- Header Area Starts -->

        @include('layouts.menu')

    <!-- Header Area End -->


    <!-- Content Area Starts -->

        @yield('content')

    <!-- Content Area End -->


    <!-- Footer Area Starts -->
    <footer class="footer-area">
        <div class="footer-widget section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="single-widget single-widget1">
                            <a href="index.html"><img src="assets/images/logo/logo2.png" alt=""></a>
                            <p class="mt-3">{{$footerList->footertext}}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-widget single-widget2 my-5 my-md-0">
                            <h5 class="mb-4">İletişim</h5>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="info-text">
                                    <p>{{$contactList->ContactAdressHead.' '. $contactList->ContactAdressHeadSub}}</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="info-text">
                                    <p>{{$contactList->ContactTelHead}}</p>
                                </div>
                            </div>
                            <div class="d-flex">
                                <div class="into-icon">
                                    <i class="fa fa-envelope-o"></i>
                                </div>
                                <div class="info-text">
                                    <p>{{$contactList->ContactMailHead}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-6">
                        <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="{{Route('index')}}">Rhoncus Çiğköfte</a> Tüm hakları saklıdır.
<br> &nbsp;&nbsp;&nbsp;&nbsp; Web tasarım<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Ferman SIZLANAN - Selluka Reklam</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="social-icons">
                            <ul>
                                <li class="no-margin">Bizi takip edin</li>
                                <li><a href="{{$footerList->facebook}}" alt="blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{$footerList->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{$footerList->gooleplus}}"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="{{$footerList->pinterest}}"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="{{$footerList->instagram}}"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->


    <!-- Javascript -->
    <script src="{{asset('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('assets/js/vendor/bootstrap-4.1.3.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/owl-carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.datetimepicker.full.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="{{asset('assets/sweet-alert/sweetalert2.js')}}"></script>
    <script src="{{asset('assets/sweet-alert/sweetalert2.all.js')}}"></script>
    @yield('js')
</body>
</html>
