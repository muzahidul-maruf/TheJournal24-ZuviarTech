@extends('frontend.layout.master')
@section('home_menu_active', 'active')
@section('page_title')

@endsection

@section('custom_css')
    <style>

    </style>

@endsection

@section('content')
    @if ($hero_news)
        <section class="featured-posts" style="background-color: #FFECDA">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-12 col-xs-12 col-lg-6" style="text-align:center;">
                        <a href="{{ route('news-details', $hero_news->slug) }}">
                            <img src="{{ asset($hero_news->image) }}" alt="" class="img-fluid">
                        </a>
                    </div>


                    <div class="col-md-12 col-xs-12 col-sm-12 col-lg-6">
                        <div class="text-right ml-3">
                            <p class="text-dark mt-3"><i class="fa-regular fa-clock"></i>
                                {{ $hero_news->created_at->diffForHumans() }} | বাংলাদেশ</p>
                            <h1 class="title-tags">
                                <a href="{{ route('news-details', $hero_news->slug) }}">
                                    {{ $hero_news->title }}
                                </a>
                            </h1>

                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="news-style-one">
                        <h3 class="news-title">
                            <span>সংবাদ</span>
                        </h3>
                        <div class="news-style-one-slide">
                            @foreach ($latest_hero_news as $news_item)
                                @if (!$loop->first)
                                    <div class="item">
                                        <div class="post-block-wrapper clearfix mb-5">
                                            <div class="post-content">
                                                <h2 class="post-title mt-3">
                                                    <a
                                                        href="{{ route('news-details', $news_item->slug) }}">{{ $news_item->title }}</a>
                                                </h2>
                                                <div class="post-meta mb-2">
                                                    <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>
                                                        {{ $news_item->created_at->diffForHumans() }}
                                                        |</span>
                                                    <span class="post-author">
                                                        বাংলাদেশ
                                                    </span>
                                                </div>
                                                <p>আমরা সব থেকে বেশি বেগ পেয়েছি পানির সোর্স নিয়ে। এখানে বিভিন্ন বিল্ডিংয়ে
                                                    পানির
                                                    সোর্স রয়েছে কিন্তু পর্যাপ্ত নয়।</p>
                                            </div>
                                            <div class="post-thumbnail">
                                                <a href="{{ route('news-details', $news_item->slug) }}">
                                                    <img class="img-fluid" src="{{ asset($news_item->image) }}"
                                                        alt="post-image" style="height: 180px;" />
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach



                        </div>
                    </div>

                    <div class="py-40"></div>


                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        <div class="widget">
                            <h3 class="news-title">
                                <span>সর্বশেষ সংবাদ</span>
                            </h3>
                            <div class="post-list-block">

                                @foreach ($latest_news as $latest_item)
                                    <div class="post-block-wrapper post-float ">
                                        <div class="post-content">
                                            <h2 class="post-title title-sm">
                                                <a
                                                    href="{{ route('news-details', $latest_item->slug) }}">{{ $latest_item->title }}</a>
                                            </h2>
                                            <div class="post-meta">
                                                <span class="posted-time"><i class="fa fa-clock-o mr-1"></i>
                                                    {{ $latest_item->created_at->diffForHumans() }}
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach



                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news-style-two">
                        <h3 class="news-title">
                            <span>ফিচার</span>
                        </h3>

                        <div class="row feature">

                            @foreach ($featured_news as $popular_item)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="post-block-wrapper clearfix">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('news-details', $popular_item->slug) }}">
                                                <img class="img-fluid" src="{{ asset($popular_item->image) }}"
                                                    alt="post-thumbnail" />
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h2 class="post-title mt-3">
                                                <a
                                                    href="{{ route('news-details', $popular_item->slug) }}">{{ $popular_item->title }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="py-40"></div>

    <section class="news-style-four bg-light section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="block">
                        <h3 class="news-title">
                            <span>আন্তর্জাতিক</span>
                        </h3>
                        @foreach ($international_news as $key => $item)
                            @if ($key == 0)
                                <div class="post-overlay-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <img class="img-fluid" src="{{ asset($item->image) }}" alt="post-thumbnail" />
                                    </div>

                                    <div class="post-content">
                                        <div class="post-meta white">
                                            <span class="posted-time">
                                                <a href="{{ route('news-details', $item->slug) }}">{{ $item->title }}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                        @endforeach

                        <div class="post-list-block">
                            @foreach ($international_news as $key => $item)
                                @if ($key > 0)
                                    <div class="post-block-wrapper post-float clearfix">
                                        <div class="post-content">
                                            <h5 class="title-sm">
                                                <a href="{{ route('news-details', $item->slug) }}">{{ $item->title }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <hr>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="block">
                        <h3 class="news-title">
                            <span>খেলাধুলা</span>
                        </h3>
                        @foreach ($sports_news as $key => $item)
                            @if ($key == 0)
                                <div class="post-overlay-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <img class="img-fluid" src="{{ asset($item->image) }}" alt="post-thumbnail" />
                                    </div>

                                    <div class="post-content">
                                        <div class="post-meta white">
                                            <span class="posted-time">
                                                <a href="{{ route('news-details', $item->slug) }}">{{ $item->title }}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                        @endforeach

                        <div class="post-list-block">
                            @foreach ($sports_news as $key => $item)
                                @if ($key > 0)
                                    <div class="post-block-wrapper post-float clearfix">
                                        <div class="post-content">
                                            <h5 class="title-sm">
                                                <a
                                                    href="{{ route('news-details', $item->slug) }}">{{ $item->title }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <hr>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="block">
                        <h3 class="news-title">
                            <span>বিনোদন</span>
                        </h3>
                        @foreach ($entertainment_news as $key => $item)
                            @if ($key == 0)
                                <div class="post-overlay-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <img class="img-fluid" src="{{ asset($item->image) }}" alt="post-thumbnail" />
                                    </div>

                                    <div class="post-content">
                                        <div class="post-meta white">
                                            <span class="posted-time">
                                                <a
                                                    href="{{ route('news-details', $item->slug) }}">{{ $item->title }}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endif
                        @endforeach

                        <div class="post-list-block">
                            @foreach ($entertainment_news as $key => $item)
                                @if ($key > 0)
                                    <div class="post-block-wrapper post-float clearfix">
                                        <div class="post-content">
                                            <h5 class="title-sm">
                                                <a
                                                    href="{{ route('news-details', $item->slug) }}">{{ $item->title }}</a>
                                            </h5>
                                        </div>
                                    </div>
                                    <hr>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="news-style-one">
                        <h3 class="news-title">
                            <span>মতামত</span>
                        </h3>
                        <div class="news-style-one-slide">

                            @foreach ($motamot_news as $item)
                                <div class="item">
                                    <div class="post-block-wrapper clearfix mb-5">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('news-details', $item->slug) }}"
                                                style="display: flex; justify-content: center">
                                                <img class="img-fluid" src="{{ asset($item->image) }}" alt="post-image"
                                                    style="height: 180px" />
                                            </a>
                                        </div>
                                        <div class="post-content text-center">
                                            <h2 class="post-title mt-3">
                                                <a
                                                    href="{{ route('news-details', $item->slug) }}">{{ $item->title }}</a>
                                            </h2>
                                            <div class="post-meta mb-2">
                                                {{-- <span class="post-author">
                                                    লেখক: বারখা দাত
                                                </span> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                    </div>
                    <div class="py-40"></div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news-style-two">
                        <h3 class="news-title">
                            <span>দেশজুড়ে</span>
                        </h3>
                        <div class="row feature">
                            @foreach ($desh_jure_news as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="post-block-wrapper clearfix">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('news-details', $item->slug) }}">
                                                <img class="img-fluid" src="{{ asset($item->image) }}"
                                                    alt="post-thumbnail" style="height: 180px;" />
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h2 class="post-title mt-3">
                                                <a
                                                    href="{{ route('news-details', $item->slug) }}">{{ $item->title }}</a>
                                            </h2>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('custom_js')

@endsection
