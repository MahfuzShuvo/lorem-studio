<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Portfolio;

class PagesController extends Controller
{
    public function case_study($id)
    {
        $portfolio = Portfolio::find($id);
        return view('frontend.pages.snow-reel', compact('portfolio'));
    }

    public function about()
    {
        return view('frontend.pages.about');
    
    }
    public function services()
    {
        return view('frontend.pages.services');
    }

    public function portfolio()
    {
        return view('frontend.pages.portfolio');
    }

    public function hireus()
    {
        return view('frontend.pages.hireus');
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
