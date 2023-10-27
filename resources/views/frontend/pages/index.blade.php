@extends('frontend.layout.master')
@section('home_menu_active', 'active')
@section('page_title')

@endsection

@section('custom_css')
    <style>

    </style>

@endsection

@section('content')

    <section class="featured-posts" style="background-color: #FFECDA">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12 col-xs-12 col-lg-6" style="text-align:center;">
                    <img src="{{ asset('necessary_assets/pics/hero/1.png') }}" alt="" class="img-fluid">
                </div>


                <div class="col-md-12 col-xs-12 col-sm-12 col-lg-6">
                    <div class="text-right ml-3">
                        <p class="text-dark mt-3"><i class="fa-regular fa-clock"></i> ২৭ মিনিট আগে | বাংলাদেশ</p>
                        <h1 class="title-tags">আগুন নিয়ন্ত্রণে এলেও এখনো ধোঁয়াচ্ছন্ন পুরো এলাকা</h1>
                        ব্যবসায়ীরা পুড়ে যাওয়া দোকান হাতড়ে খুঁজছেন, কিছু পাওয়া যায় কি না। তবে তাদের ভাষ্য, 'ছাই ছাড়া কিছু
                        নেই'।
                        ব্যবসায়ীরা জানান, মোহাম্মদপুর কৃষি মার্কেটের যে অংশে আগুন লেগেছে সেটা নতুন বাজার নামে পরিচিত। ওই
                        মার্কেটে সাড়ে চার শতাধিক দোকান ছিল। সেগুলোর মধ্যে সোনার দোকান, কাপড়ের দোকান, বাসনপত্রের দোকান,
                        কাঁচাবাজারসহ বিভিন্ন ধরনের দোকান ছিল। সেগুলোর সবই এখন পুড়ে ছাই হয়ে গেছে।
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="block-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
                    <div class="news-style-one">
                        <h3 class="news-title">
                            <span>সংবাদ</span>
                        </h3>
                        <div class="news-style-one-slide">
                            @foreach ($news as $news_item)
                                <div class="item">
                                    <div class="post-block-wrapper clearfix mb-5">
                                        <div class="post-content">
                                            <h2 class="post-title mt-3">
                                                <a
                                                    href="{{ route('news-details', $news_item->slug) }}">{{ $news_item->title }}</a>
                                            </h2>
                                            <div class="post-meta mb-2">
                                                <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>৪৫ মিনিট আগে
                                                    |</span>
                                                <span class="post-author">
                                                    বাংলাদেশ
                                                </span>
                                            </div>
                                            <p>আমরা সব থেকে বেশি বেগ পেয়েছি পানির সোর্স নিয়ে। এখানে বিভিন্ন বিল্ডিংয়ে পানির
                                                সোর্স রয়েছে কিন্তু পর্যাপ্ত নয়।</p>
                                        </div>
                                        <div class="post-thumbnail">
                                            <a href="{{ route('news-details', $news_item->slug) }}">
                                                <img class="img-fluid" src="{{ asset($news_item->image) }}" alt="post-image"
                                                    style="height: 180px;" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                            {{-- <div class="item">
                                <div class="post-block-wrapper clearfix mb-5">
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">কৃষি মার্কেটে অগ্নিকাণ্ডে ২১৭ দোকান ক্ষতিগ্রস্ত হয়েছে:
                                                ডিএনসিসি</a>
                                        </h2>
                                        <div class="post-meta mb-2">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>৪৫ মিনিট আগে
                                                |</span>
                                            <span class="post-author">
                                                বাংলাদেশ
                                            </span>
                                        </div>
                                        <p>ব্যবসায়ীরা দাবি করেন বৈধ-অবৈধ মিলিয়ে মার্কেটে ৩৫০টি দোকান রয়েছে। তবে ডিএনসিসির
                                            নির্বাহী কর্মকর্তা সেলিম রেজার মতে, ৩১৭টি দোকান বরাদ্দ ছিল, যার মধ্যে ২১৭টি
                                            ক্ষতিগ্রস্ত হয়েছে।</p>
                                    </div>
                                    <div class="post-thumbnail">
                                        <a href="single-post.htm">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/2.png') }}"
                                                alt="post-image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="post-block-wrapper clearfix mb-5">
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">‘আগুন নেভানোয় সবচেয়ে বেশি বেগ পেতে হয়েছে পানি ও উৎসুক জনতা
                                                নিয়ে’</a>
                                        </h2>
                                        <div class="post-meta mb-2">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>৪৫ মিনিট আগে
                                                |</span>
                                            <span class="post-author">
                                                বাংলাদেশ
                                            </span>
                                        </div>
                                        <p>আমরা সব থেকে বেশি বেগ পেয়েছি পানির সোর্স নিয়ে। এখানে বিভিন্ন বিল্ডিংয়ে পানির
                                            সোর্স রয়েছে কিন্তু পর্যাপ্ত নয়।</p>
                                    </div>
                                    <div class="post-thumbnail">
                                        <a href="single-post.htm">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/1.png') }}"
                                                alt="post-image" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="post-block-wrapper clearfix mb-5">
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">কৃষি মার্কেটে অগ্নিকাণ্ডে ২১৭ দোকান ক্ষতিগ্রস্ত হয়েছে:
                                                ডিএনসিসি</a>
                                        </h2>
                                        <div class="post-meta mb-2">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-2"></i>৪৫ মিনিট আগে
                                                |</span>
                                            <span class="post-author">
                                                বাংলাদেশ
                                            </span>
                                        </div>
                                        <p>ব্যবসায়ীরা দাবি করেন বৈধ-অবৈধ মিলিয়ে মার্কেটে ৩৫০টি দোকান রয়েছে। তবে ডিএনসিসির
                                            নির্বাহী কর্মকর্তা সেলিম রেজার মতে, ৩১৭টি দোকান বরাদ্দ ছিল, যার মধ্যে ২১৭টি
                                            ক্ষতিগ্রস্ত হয়েছে।</p>
                                    </div>
                                    <div class="post-thumbnail">
                                        <a href="single-post.htm">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/2.png') }}"
                                                alt="post-image" />
                                        </a>
                                    </div>
                                </div>
                            </div> --}}
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
                                                <span class="posted-time"><i class="fa fa-clock-o mr-1"></i>2 hours
                                                    ago</span>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                @endforeach
                                {{-- <div class="post-block-wrapper post-float">
                                    <div class="post-content">
                                        <h2 class="post-title title-sm">
                                            <a href="#">আগারগাঁওয়ে সড়ক অবরোধ করে কৃষি বিশ্ববিদ্যালয় শিক্ষার্থীদের
                                                বিক্ষোভ</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-1"></i> 15 March ,
                                                2019</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="post-block-wrapper post-float">
                                    <div class="post-content">
                                        <h2 class="post-title title-sm">
                                            <a href="#">আগারগাঁওয়ে সড়ক অবরোধ করে কৃষি বিশ্ববিদ্যালয় শিক্ষার্থীদের
                                                বিক্ষোভ</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-1"></i> 15 March ,
                                                2019</span>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <div class="post-block-wrapper post-float">
                                    <div class="post-content">
                                        <h2 class="post-title title-sm">
                                            <a href="#">আগারগাঁওয়ে সড়ক অবরোধ করে কৃষি বিশ্ববিদ্যালয় শিক্ষার্থীদের
                                                বিক্ষোভ</a>
                                        </h2>
                                        <div class="post-meta">
                                            <span class="posted-time"><i class="fa fa-clock-o mr-1"></i> 15 March ,
                                                2019</span>
                                        </div>
                                    </div>
                                </div>
                                <hr> --}}


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

                            @foreach ($popular_news as $popular_item)
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
                            {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/4.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">সরকার সমর্থক ‘প্রগতিশীল ইসলামী জোটের’ আত্মপ্রকাশ</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/5.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">বিচারকের সই-সিল জাল করে গ্রেপ্তারি পরোয়ানা,
                                                ‘উদ্দেশ্য হয়রানি’</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/6.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">কেন স্যালাইনের এতো সংকট!</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/7.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">লিবিয়ায় ‘ড্যানিয়েল’ ঝড়ের আঘাতে ৬ বাংলাদেশি নিহত</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/8.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">অবিলম্বে জ্বালানি তেলের বর্ধিত মূল্য প্রত্যাহারের দাবি যাত্রী
                                                কল্যাণ সমিতির</a>
                                        </h2>
                                    </div>
                                </div>
                            </div> --}}
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
                            <span>সংবাদ</span>
                        </h3>
                        <div class="news-style-one-slide">

                            @foreach ($news as $item)
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

                            {{-- <div class="item">
                                <div class="post-block-wrapper clearfix mb-5">
                                    <div class="post-thumbnail">
                                        <a href="" style="display: flex; justify-content: center">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/11.png') }}"
                                                alt="post-image" />
                                        </a>
                                    </div>
                                    <div class="post-content text-center">
                                        <h2 class="post-title mt-3">
                                            <a href="#">ভারতের সফল মহাকাশ মিশনের অখ্যাত নায়কেরা ‘মেধা পাচার’ বন্ধের
                                                যে শিক্ষা দিলেন</a>
                                        </h2>
                                        <div class="post-meta mb-2">
                                            <span class="post-author">
                                                লেখক: বারখা দাত
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="post-block-wrapper clearfix mb-5">
                                    <div class="post-thumbnail">
                                        <a href="" style="display: flex; justify-content: center">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/14.png') }}"
                                                alt="post-image" />
                                        </a>
                                    </div>
                                    <div class="post-content text-center">
                                        <h2 class="post-title mt-3">
                                            <a href="#">ভারতের সফল মহাকাশ মিশনের অখ্যাত নায়কেরা ‘মেধা পাচার’ বন্ধের
                                                যে শিক্ষা দিলেন</a>
                                        </h2>
                                        <div class="post-meta mb-2">
                                            <span class="post-author">
                                                লেখক: বারখা দাত
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="post-block-wrapper clearfix mb-5">
                                    <div class="post-thumbnail">
                                        <a href="" style="display: flex; justify-content: center">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/10.png') }}"
                                                alt="post-image" />
                                        </a>
                                    </div>
                                    <div class="post-content text-center">
                                        <h2 class="post-title mt-3">
                                            <a href="#">ভারতের সফল মহাকাশ মিশনের অখ্যাত নায়কেরা ‘মেধা পাচার’ বন্ধের
                                                যে শিক্ষা দিলেন</a>
                                        </h2>
                                        <div class="post-meta mb-2">
                                            <span class="post-author">
                                                লেখক: বারখা দাত
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}

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
                            @foreach ($news as $item)
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
                            {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/16.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">টাঙ্গাইলে দলিল জাল করে জমি কেনাবেচা করায় চার চিকিৎসকসহ ১০ জন
                                                কারাগারে</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/17.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">আখাউড়া-আগরতলা রেলপথে পরীক্ষামূলক ট্রেন চলবে আগামীকাল</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/18.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">নারায়ণগঞ্জে ফ্ল্যাটে আগুন, ব়্যাব সদস্যসহ দগ্ধ ২</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/19.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">ছাত্রলীগের বিরুদ্ধে স্বাস্থ্য কমপ্লেক্সের ২ কর্মীকে মারধরের
                                                অভিযোগ</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/20.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">আখাউড়া-আগরতলা রেলপথে পরীক্ষামূলক ট্রেন চলবে আগামীকাল</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/21.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">যান্ত্রিক ত্রুটি সারাইয়ের পর আবারও উৎপাদনে ফিরল রামপাল
                                                তাপবিদ্যুৎকেন্দ্র</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/22.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">চট্টগ্রামে বিএনপি কার্যালয়ে হামলার ঘটনায় মামলা না নেওয়ার
                                                অভিযোগ</a>
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="post-block-wrapper clearfix">
                                    <div class="post-thumbnail">
                                        <a href="#">
                                            <img class="img-fluid" src="{{ asset('necessary_assets/pics/news/23.png') }}"
                                                alt="post-thumbnail" />
                                        </a>
                                    </div>
                                    <div class="post-content">
                                        <h2 class="post-title mt-3">
                                            <a href="#">ইটিটি কক্ষের সামনে দুই পক্ষের মধ্যে মারামারি হয়: বারডেমের
                                                নিরাপত্তা কর্মকর্তা</a>
                                        </h2>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
@section('custom_js')

@endsection
