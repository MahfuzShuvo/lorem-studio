<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\HireUs;
use App\Portfolio;
use App\Service;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
    public function index()
    {
        return view('backend.index');
    }

    public function services()
    {
    	$services = Service::all();
        return view('backend.pages.services.index', compact('services'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::all();
        return view('backend.pages.portfolio.index', compact('portfolios'));
    }

    public function hireus()
    {
    	$hireus = HireUs::all();
        return view('backend.pages.hireus.index', compact('hireus'));
    }
}
