<div class="main-navbar clearfix" style="background-color: #013545">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg site-main-nav navigation">
                    <a class="navbar-brand d-lg-none" href="/">
                        <img style="height: 80px" src="{{ asset('necessary_assets/pics/header_logo.png') }}"
                            alt="">
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fa fa-bars"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">

                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    বাংলাদেশ
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="index.html">বাংলাদেশ 1</a>
                                    <a class="dropdown-item" href="index-2.html">বাংলাদেশ 2</a>
                                </div>
                            </li> --}}
                            {{-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    Account
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="account.html">Log In</a>
                                    <a class="dropdown-item" href="signup.html">Register</a>
                                </div>
                            </li> --}}

                            <li class="nav-item">
                                <a class="@yield('home_menu_active') nav-link" href="{{ route('home-page') }}">বাংলাদেশ</a>
                            </li>
                            <li class="nav-item">
                                <a class="@yield('international_news_menu_active') nav-link"
                                    href="{{ route('international_news') }}">আন্তর্জাতিক</a>
                            </li>
                            <li class="nav-item">
                                <a class="@yield('sports_news_menu_active') nav-link" href="{{ route('sports_news') }}">খেলাধুলা</a>
                            </li>
                            <li class="nav-item">
                                <a class="@yield('entertainment_news_menu_active') nav-link"
                                    href="{{ route('entertainment_news') }}">বিনোদন</a>
                            </li>
                            <li class="nav-item">
                                <a class="@yield('feature_news_menu_active') nav-link" href="{{ route('feature_news') }}">ফিচার</a>
                            </li>
                            <li class="nav-item">
                                <a class="@yield('desh_jure_news_menu_active') nav-link" href="{{ route('desh_jure_news') }}">দেশজুড়ে</a>
                            </li>
                            <li class="nav-item">
                                <a class="@yield('motamot_news_menu_active') nav-link" href="{{ route('motamot_news') }}">মতামত</a>
                            </li>
                            <li class="nav-item">
                                <a class="@yield('others_news_menu_active') nav-link" href="{{ route('others_news') }}">অন্যান্য</a>
                            </li>

                        </ul>
                        <div class="nav-search ml-auto d-none d-lg-block">
                            <span id="search">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    </div>
    <form class="site-search" method="get">
        <input type="text" id="searchInput" name="site_search" placeholder="Enter Keyword Here..." autofocus="">
        <div class="search-close">
            <span class="close-search">
                <i class="fa fa-times"></i>
            </span>
        </div>
    </form>
</div>
