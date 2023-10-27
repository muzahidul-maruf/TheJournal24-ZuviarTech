<header class="header-navigation d-none d-lg-block">
    <div class="container">
        <div class="row align-items-center">

            <div class="col-xs-12 col-sm-3 col-md-4">
                <h5 class="text-white">{{ bangla_date(time(), 'en', 'd m y') }} <br>
                    {{ bangla_date(time()) }}</h5>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-4">
                <!-- Logo -->
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('necessary_assets/pics/header_logo.png') }}" alt="" class="w-50">
                    </a>
                </div>
                <!-- End Logo -->
            </div>
            <div class="col-xs-12 col-sm-9 col-md-4">


                <div class="top-ad-banner float-right">
                    <a target="_blank" href="https://www.facebook.com/thejournal24">
                        <span class="social-icon">
                            <i class="fa-brands fa-facebook fa-2xl"></i>
                        </span>
                    </a>
                    <a target="_blank" href="https://twitter.com/thejournal24">
                        <span class="social-icon">
                            <i class="fa-brands fa-twitter fa-2xl"></i>
                        </span>
                    </a>
                    {{-- <a href="#">
                        <span class="social-icon">
                            <i class="fa-brands fa-instagram fa-2xl"></i>
                        </span>
                    </a>
                    <a href="#" class="me-0">
                        <span class="social-icon">
                            <i class="fa-brands fa-youtube fa-2xl"></i>
                        </span>
                    </a> --}}
                </div>
            </div>
        </div>
    </div>
</header>
