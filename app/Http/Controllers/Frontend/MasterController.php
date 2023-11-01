<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function homePage()
    {
        $hero_news = News::where('is_hero', 1)->latest()->first();

        $latest_hero_news = News::where('is_hero', 1)->latest()->get();
        $latest_news = News::latest()->take(4)->get(['title', 'slug', 'created_at']);
        $featured_news = News::where('category_id', 5)->take(6)->get();

        $international_news = News::where('category_id', 2)->latest()->take(4)->get();
        $sports_news = News::where('category_id', 3)->latest()->take(4)->get();
        $entertainment_news = News::where('category_id', 4)->latest()->take(4)->get();
        $desh_jure_news = News::where('category_id', 6)->latest()->take(4)->get();
        $motamot_news = News::where('category_id', 7)->latest()->take(4)->get();


        return view('frontend.pages.index', compact(['hero_news', 'latest_hero_news', 'featured_news', 'latest_news', 'sports_news', 'entertainment_news', 'international_news', 'motamot_news', 'desh_jure_news']));
    }


    public function newsDetails($slug)
    {
        $news_details = News::where('slug', $slug)->first();
        $related_news = News::where('category_id', $news_details->category_id)->latest()->get();

        $most_readed_news = News::orderBy('read_count', 'desc')->take(6)->get();

        return view('frontend.pages.news-details', compact(['news_details', 'related_news', 'most_readed_news']));
    }
    public function international_news()
    {
        $international_news = News::where('category_id', 2)->get();
        return view('frontend.pages.international_news', compact(['international_news']));
    }
    public function sports_news()
    {
        $sports_news = News::where('category_id', 3)->latest()->get();
        return view('frontend.pages.sports_news', compact(['sports_news']));
    }
    public function entertainment_news()
    {
        $entertainment_news = News::where('category_id', 4)->latest()->get();
        return view('frontend.pages.entertainment_news', compact(['entertainment_news']));
    }
    public function feature_news()
    {
        $feature_news = News::where('category_id', 5)->latest()->get();
        return view('frontend.pages.feature_news', compact(['feature_news']));
    }
    public function desh_jure_news()
    {
        $desh_jure_news = News::where('category_id', 6)->latest()->get();
        return view('frontend.pages.desh_jure_news', compact(['desh_jure_news']));
    }
    public function others_news()
    {
        $others_news = News::where('category_id', 7)->latest()->get();
        return view('frontend.pages.others_news', compact(['others_news']));
    }
}
