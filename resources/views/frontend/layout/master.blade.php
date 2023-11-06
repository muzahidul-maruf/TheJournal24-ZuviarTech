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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <style>
        #navbarSupportedContent a.active {
            color: #dc3545;
        }

        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            border-radius: 3px;
            background-color: #013545;
            border-color: #013545;
            margin-right: 8px;
            padding: 10px 16px
        }

        .page-item:first-child .page-link {
            margin-left: 0;
            border-radius: 3px;
            margin-right: 8px;
            padding: 10px 16px;
        }
    </style>

    @yield('custom_css')
</head>

<body>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @if (Session::has('message'))
        <script>
            var message = {!! json_encode(Session::get('message')) !!};
            toastr.success(message, {
                timeOut: 5000
            });
        </script>
    @endif

    @yield('custom_js')
</body>

</html>
