<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <title>The Journal 24 @yield('page_title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- theme meta -->
    <meta name="theme-name" content="newsbit" />

    <!--Favicon-->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">

    <!-- THEME CSS
 ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('necessary_assets/plugins/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('necessary_assets/plugins/font-awesome/css/font-awesome.min.css') }}"
        rel="stylesheet">
    <!-- Slick Carousel -->
    <link rel="stylesheet" href="{{ asset('necessary_assets/plugins/slick-carousel/slick.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('necessary_assets/plugins/slick-carousel/slick-theme.css') }}"
        rel="stylesheet">
    <!-- manin stylesheet -->
    <link rel="stylesheet" href="{{ asset('necessary_assets/css/style.css') }}" rel="stylesheet">
    <style>

    </style>

    @yield('custom_css')
</head>

<body>

    {{-- <div class="trending-bar-dark hidden-xs">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h3 class="trending-bar-title">Trending News</h3>
                    <div class="trending-news-slider">
                        <div class="item">
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">Ex-Googler warns coding bootcamps are lacking</a>
                                </h2>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">Intel’s new smart glasses actually look good</a>
                                </h2>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post-content">
                                <h2 class="post-title title-sm">
                                    <a href="single-post.html">Here's How To Get Free Pizza On 2 hour</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-12 col-sm-12 col-xs-12 top-nav-social-lists text-lg-right col-lg-4 ml-lg-auto">
                    <ul class="list-unstyled mt-4 mt-lg-0">
                        <li>
                            <a href="#">
                                <span class="social-icon">
                                    <i class="fa fa-facebook-f"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="social-icon">
                                    <i class="fa fa-twitter"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="social-icon">
                                    <i class="fa fa-google-plus"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="social-icon">
                                    <i class="fa fa-youtube"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="social-icon">
                                    <i class="fa fa-linkedin"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="social-icon">
                                    <i class="fa fa-pinterest-p"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="social-icon">
                                    <i class="fa fa-rss"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="social-icon">
                                    <i class="fa fa-github"></i>
                                </span>
                            </a>
                            <a href="#">
                                <span class="social-icon">
                                    <i class="fa fa-reddit-alien"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div> --}}

    <!-- ======= Top Bar ======= -->
    @include('frontend._partials.top_bar')

    <!-- ======= Header ======= -->
    @include('frontend._partials.header')
    <!-- End Header -->


    @yield('content')





    <!-- ======= Footer ======= -->
    @include('frontend._partials.footer')
    <!-- End Footer -->



    <!-- THEME JAVASCRIPT FILES
================================================== -->
    <!-- initialize jQuery Library -->
    <script src="{{ asset('necessary_assets/plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap jQuery -->
    <script src="{{ asset('necessary_assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Slick Slider -->
    <script src="{{ asset('necessary_assets/plugins/slick-carousel/slick.min.js') }}"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script src="{{ asset('necessary_assets/plugins/google-map/gmap.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('necessary_assets/js/custom.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    @yield('custom_js')
</body>

</html>
