@extends('frontend.layout.master')
@section('home_menu_active', 'active')
@section('page_title')

@endsection

@section('custom_css')
    <style>
        #social-links ul {
            margin: 0;
            padding-left: 0;
            display: flex;
            list-style-type: none;
        }

        #social-links ul li {
            margin-right: 5px;
        }
    </style>

@endsection

@section('content')


    <section class="block-wrapper">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 ">

                    <h1 class="primary-color">
                        {{ $news_details->title }}
                    </h1>
                    {{-- <h4 class="primary-color">
                        বুধবার (১৪ সেপ্টেম্বর) দিবাগত রাত ৩টা ৪০ মিনিটের দিকে আগুনের সূত্রপাত। এখন পর্যন্ত হতাহতের কোনো খবর
                        পাওয়া যায়নি।
                    </h4> --}}

                    <div class="my-4" style="text-align:center;">
                        <img src="{{ asset($news_details->image) }}" alt="" class="img-fluid">
                    </div>

                    <div class="my-5">

                        {!! $news_details->description !!}

                    </div>

                    <div class="comment ">
                        <div class="col-md-12">
                            @if ($feedbacks_count > 0)
                                <h3 class="text-right">{{ $feedbacks_count }} টি মন্তব্য</h3>
                            @else
                                <h3 class="text-right">০ টি মন্তব্য</h3>
                            @endif

                        </div>
                        @if ($feedbacks != null)
                            <div class="col-md-12">
                                @foreach ($feedbacks as $item)
                                    <div class="row">
                                        <div class="col-2 d-none d-md-block">
                                            {{-- <img src="{{ asset('necessary_assets/images/news/user-1.png') }}"
                                                alt=""> --}}
                                        </div>
                                        <div class="col-md-10">
                                            <textarea class="form-control" name="feedback" id="" rows="2" required disabled readonly>{{ $item->feedback }}</textarea>

                                        </div>
                                    </div>
                                    <br>
                                @endforeach
                            </div>
                        @endif


                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-2 d-none d-md-block">
                                    <img src="{{ asset('necessary_assets/images/news/user-1.png') }}" alt="">
                                </div>
                                <div class="col-md-10">
                                    <form action="{{ route('store_feedback') }}" method="POST"
                                        enctype="multipart/form-data" class="">
                                        @csrf
                                        <input type="hidden" name="news_id" id="" value="{{ $news_details->id }}">
                                        <textarea class="form-control" name="feedback" id="" rows="4" required
                                            placeholder="একটি মন্তব্য যোগ করুন..."></textarea>
                                        <button class="btn btn-primary mt-4" type="submit">পোস্ট করুন</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="py-40"></div>


                </div>

                <div class="col-lg-3">
                    <div class="row py-4">
                        <h5 class="mr-2">বাংলাদেশ</h5>
                        <p class="mb-1">দ্যা জার্নাল রিপোর্ট</p>
                        {{-- <p class="">রোববার সেপ্টেম্বর ১৭, ২০২৩</p> --}}
                        {{-- <p class="">
                            <span class="share-count">
                                ১৪ বার শেয়ার <i class="fa-solid fa-share"></i>
                            </span>
                        </p> --}}
                        {{-- {!! $shareComponent !!} --}}

                        <div class="list-inline footer-social">
                            {{-- <li class="li list-inline-item"><a href="javascript:void(0)"><i
                                        class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li class="li list-inline-item"><a href="javascript:void(0)"><i
                                        class="fa-brands fa-twitter"></i></a></li>
                            <li class="li list-inline-item"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                            </li>
                            <li class="li list-inline-item"><a href="#"><i class="fa-brands fa-youtube"></i></a></li> --}}
                            {!! $shareComponent !!}
                        </div>

                    </div>
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

    <section>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="news-style-two">
                        <h3 class="news-title">
                            <span>সম্পর্কিত খবর</span>
                        </h3>
                        <div class="row feature">
                            @foreach ($related_news as $item)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <div class="post-block-wrapper clearfix">
                                        <div class="post-thumbnail">
                                            <a href="{{ route('news-details', $item->slug) }}">
                                                <img class="img-fluid" src="{{ asset($item->image) }}" alt="post-thumbnail"
                                                    style="height:180px;" />
                                            </a>
                                        </div>
                                        <div class="post-content">
                                            <h2 class="post-title mt-3">
                                                <a href="{{ route('news-details', $item->slug) }}">{{ $item->title }}
                                                </a>
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
