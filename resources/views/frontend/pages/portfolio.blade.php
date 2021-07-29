@extends('frontend.partials.master')

@section('style')
    <style>
        nav .navbar-brand img {
            filter: invert(1);
        }
        nav .navbar-nav li a {
            color: #000;
            opacity: .54;
            font-size: 12px;
            letter-spacing: 0;
            font-weight: 400;
            font-family: "Lato", sans-serif;
        }
        nav .navbar-nav li a:hover {
            color: #fff;
            font-weight: 500;
            background-color: #1e2f4fd9 !important;
            opacity: 1;
            top: 0px;
            /* padding: 36px 10px 10px; */
            /* margin-top: -28px; */
        }
        nav .navbar-nav .nav-item.active a{
            color: #fff;
            font-weight: 500;
            background-color: #1e2f4fd9 !important;
            opacity: 1;
            top: 0px;
            /* padding: 36px 10px 10px; */
            /* margin-top: -28px; */
        }
        nav .hire-btn {
            color: #000;
            border-color: #000;
        }
        nav .hire-btn:hover {
            background: #000;
            border-color: #000; 
            color: #fff !important;
        }
        nav .hamburger {
            color: #000;
        }
        nav .navbar-collapse {
            background: #fff;
            margin: auto -15px;
        }
    </style>
@endsection

@section('content')

    <section class="portfolio secondary-section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h5>Our Latest Work</h5>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                    <div class="portfolio-nav">
                        <ul>
                            <li class="portfolio-item" data-mixitup-control data-filter="all">All</li>
                            {{-- <li class="portfolio-item" data-mixitup-control data-filter=".ux">UI/UX</li>
                            <li class="portfolio-item" data-mixitup-control data-filter=".web">Web Design</li>
                            <li class="portfolio-item" data-mixitup-control data-filter=".app">Mobile App</li> --}}
                            @foreach (App\Service::where('status', 0)->get() as $service)
                                <li class="portfolio-item" data-mixitup-control data-filter=".{{ $service->slug }}">{{ $service->name }}</li>
                            @endforeach
                            
                        </ul>
                    </div>
                    
                    <div class="portfolio-container bd-grid">
                        @foreach (App\Portfolio::all() as $key => $port)
                            <div class="portfolio-content mix {{ App\Service::where('id', $port->service_id)->first()->slug }}">
                                <div class="portfolio-content-inner">
                                    <div class="portfolio-img">
                                        <img src="{{ asset($port->thumbnail) }}" alt="" class="image-item">
                                    </div>
                                    <div class="portfolio-link">
                                        <a href="{{ route('case_study', $port->id) }}" class="portfolio-link-name">
                                            {{-- <img src="{{ asset('public/assets/img/show_btn.svg') }}" alt=""> --}}
                                            <h6>{{ $port->project_title }}</h6>
                                            <p>{{ App\Service::where('id', $port->service_id)->first()->name }}</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {{-- <div class="portfolio-content w-3 h-2 mix ux">
                            <div class="portfolio-content-inner">
                                <div class="portfolio-img">
                                    <img src="{{ asset('public/assets/img/portfolio/portfolio-1.png') }}" alt="" class="image-item">
                                </div>
                                <div class="portfolio-link">
                                    <a href="{{ route('case_study') }}" class="portfolio-link-name">
                                        <img src="{{ asset('public/assets/img/show_btn.svg') }}" alt="">
                                        <p class="mt-2 mb-2">View Case Study</p>
                                    </a>
                                </div>
                            </div>
                        </div> --}}
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="choose-us">
        <div class="container">
            <div class="row">
                <div class="col-lg 12">
                    <div class="choose-us-content">
                        <div class="choose-us-txt">
                            <h2>Choose us Now?</h2>
                        </div>
                        <div class="choose-us-btn mt-3">
                            <a href="{{ route('hireus') }}" class="custom-hire-btn">HIRE US NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
@endsection