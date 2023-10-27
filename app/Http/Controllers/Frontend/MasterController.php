<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function homePage()
    {
        $news = News::take(9)->get();
        $latest_news = News::latest()->take(4)->get(['title', 'slug']);
        $popular_news = News::where('is_popular', 1)->take(6)->get();

        $international_news = News::where('category_id', 2)->latest()->take(4)->get();
        $entertainment_news = News::where('category_id', 4)->latest()->take(4)->get();
        $sports_news = News::where('category_id', 3)->latest()->take(4)->get();
        return view('frontend.pages.index', compact(['news', 'latest_news', 'popular_news', 'sports_news', 'entertainment_news', 'international_news']));
    }


    public function newsDetails($slug)
    {
        $news_details = News::where('slug', $slug)->first();
        $related_news = News::where('category_id', $news_details->category_id)->latest()->get();
        return view('frontend.pages.news-details', compact(['news_details', 'related_news']));
    }
    public function international_news()
    {
        $international_news = News::where('category_id', 2)->get();
        return view('frontend.pages.international_news', compact(['international_news']));
    }
}
