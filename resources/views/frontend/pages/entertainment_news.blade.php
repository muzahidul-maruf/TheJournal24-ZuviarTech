@extends('frontend.layout.master')
@section('entertainment_news_menu_active', 'active')
@section('page_title')
     | বিনোদন
@endsection

@section('custom_css')
    <style>

    </style>

@endsection

@section('content')



    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news-style-two pt-3">
                        {{-- <h3 class="news-title">
                            <span>দেশজুড়ে</span>
                        </h3> --}}
                        <div class="row feature">
                            @foreach ($entertainment_news as $key => $item)
                                @if ($key == 0)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="post-block-wrapper clearfix">
                                            {{-- <div class="post-thumbnail">
                                                <a href="{{ route('news-details', $item->slug) }}">
                                                    <img class="img-fluid" src="{{ asset($item->image) }}"
                                                        alt="post-thumbnail" style="height: 180px;" />
                                                </a>
                                            </div> --}}
                                            <div class="post-content">
                                                <h2 class="post-title mt-3">
                                                    <a
                                                        href="{{ route('news-details', $item->slug) }}">{{ $item->title }}</a>
                                                </h2>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                            @foreach ($entertainment_news as $key => $item)
                                @if ($key > 0)
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
                                @endif
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="block-wrapper" style="background-color: #F8F6F5">
        <div class="container">
            <div class="row">


                <div class="col-lg-9">
                    <div class="post-list-block">
                        @foreach ($entertainment_news as $key => $item)
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

                        {{-- <div class="post-block-wrapper post-float clearfix">
                            <div class="post-content">
                                <h5 class="title-sm">
                                    <a href="#">ইউক্রেনে যুক্তরাজ্যের চ্যালেঞ্জার ট্যাংক ধ্বংস করেছে রাশিয়া</a>
                                </h5>
                            </div>
                        </div>
                        <hr> --}}
                    </div>
                </div>


                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget">
                            <h3 class="news-title">
                                <span>সর্বাধিক পঠিত</span>
                            </h3>
                            <div class="post-list-block">
                                @foreach ($entertainment_news as $item)
                                    <div class="post-block-wrapper post-float ">
                                        <div class="post-content">
                                            <h2 class="post-title title-sm">
                                                <a href="{{ route('news-details', $item->slug) }}">
                                                    {{ $item->title }}
                                                </a>
                                            </h2>

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

@endsection
@section('custom_js')

@endsection
