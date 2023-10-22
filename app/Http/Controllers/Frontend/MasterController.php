<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function homePage()
    {
        // return view('frontend.layout.master');
        return view('frontend.pages.index');
    }
}
