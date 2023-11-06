@extends('frontend.layout.master')
@section('international_news_menu_active', 'active')
@section('page_title')
    | আন্তর্জাতিক
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
                        <div class="row feature">
                            @foreach ($international_news as $key => $item)
                                @if ($key == 0)
                                    <div class="col-lg-4 col-md-6 col-sm-6">
                                        <div class="post-block-wrapper clearfix">
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
                            @foreach ($international_news as $key => $item)
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
                    <nav aria-label="Page navigation pagination-wrapper" class="pagination-wrapper">
                        <div class="pagination justify-content-center">
                            {!! $international_news->links() !!}
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>


    <section class="block-wrapper" style="background-color: #F8F6F5">
        <div class="container">
            <div class="row">


                <div class="col-lg-9">
                    <div class="post-list-block">

                        @foreach ($sub_cat_news as $key => $sub_cat_news)
                            {{-- @if ($key > 0) --}}
                            <div class="post-block-wrapper post-float clearfix">
                                <div class="post-content">
                                    <h5 class="title-sm">
                                        {{-- {{ route('news-details', $item->slug) }} --}}
                                        <a>{{ $sub_cat_news->name }}</a>
                                    </h5>
                                </div>
                            </div>
                            <hr>
                            @foreach ($sub_cat_news->news as $key => $newss)
                                @if ($key == 0)
                                    <div class="post-block-wrapper post-float clearfix">
                                        <div class="post-content">
                                            <h5 class="title-sm">
                                                <a href="{{ route('news-details', $newss->slug) }}">{{ $newss->title }}</a>
                                                <p>
                                                    <a href="{{ route('news-details', $newss->slug) }}">
                                                        {!! \Illuminate\Support\Str::words($newss->description, 20, '....') !!}
                                                    </a>
                                                </p>

                                            </h5>
                                        </div>
                                    </div>
                                    <hr>
                                @endif
                            @endforeach
                            {{-- @endif --}}
                        @endforeach

                    </div>
                </div>


                <div class="col-lg-3">
                    <div class="sidebar">
                        <div class="widget">
                            <h3 class="news-title">
                                <span>সর্বাধিক পঠিত</span>
                            </h3>
                            <div class="post-list-block">
                                @foreach ($most_readed_news as $item)
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
