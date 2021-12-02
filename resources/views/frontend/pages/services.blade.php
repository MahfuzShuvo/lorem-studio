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

    <section id="services" class="services secondary-section">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h5>Our Services</h5>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>
            </div>
            <div class="row mt-lg-5">
                <div class="mb-lg-3">
                    <div class="services-list">
                        <a href="#">Brand Identity Design</a>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                    <div class="project-sec mt-lg-5">
                        <div class="row ml-0">
                            <div class="col-lg-6 col-6 mb-2">
                                <div class="trendy-work-content">
                                    <div class="trendy-work-content-inner">
                                        <div class="trendy-work-img">
                                            <img src="{{ asset('public/assets/img/work/work-1.png') }}" alt="" class="image-item">
                                        </div>
                                        <div class="trendy-work-overlay">
                                            <a href="#" class="title">Some Trendy work of us</a>
                                            <span></span>
                                            <p class="description">
                                                It is a long established fact that a reader will be distracted by the readable content of a
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6 mb-2">
                                <div class="trendy-work-content">
                                    <div class="trendy-work-content-inner">
                                        <div class="trendy-work-img">
                                            <img src="{{ asset('public/assets/img/work/work-2.png') }}" alt="" class="image-item">
                                        </div>
                                        <div class="trendy-work-overlay">
                                            <a href="#" class="title">Some Trendy work of us</a>
                                            <span></span>
                                            <p class="description">
                                                It is a long established fact that a reader will be distracted by the readable content of a
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-lg-3">
                    <div class="services-list">
                        <a href="#">Print Design & Marketing Material</a>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                    <div class="project-sec mt-lg-5">
                        <div class="row ml-0">
                            <div class="col-lg-6 col-6 mb-2">
                                <div class="trendy-work-content">
                                    <div class="trendy-work-content-inner">
                                        <div class="trendy-work-img">
                                            <img src="{{ asset('public/assets/img/work/work-3.png') }}" alt="" class="image-item">
                                        </div>
                                        <div class="trendy-work-overlay">
                                            <a href="#" class="title">Some Trendy work of us</a>
                                            <span></span>
                                            <p class="description">
                                                It is a long established fact that a reader will be distracted by the readable content of a
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6 mb-2">
                                <div class="trendy-work-content">
                                    <div class="trendy-work-content-inner">
                                        <div class="trendy-work-img">
                                            <img src="{{ asset('public/assets/img/work/work-4.png') }}" alt="" class="image-item">
                                        </div>
                                        <div class="trendy-work-overlay">
                                            <a href="#" class="title">Some Trendy work of us</a>
                                            <span></span>
                                            <p class="description">
                                                It is a long established fact that a reader will be distracted by the readable content of a
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-lg-3">
                    <div class="services-list">
                        <a href="#">UI & UX Design</a>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                    <div class="project-sec mt-lg-5">
                        <div class="row ml-0">
                            <div class="col-lg-6 col-6 mb-2">
                                <div class="trendy-work-content">
                                    <div class="trendy-work-content-inner">
                                        <div class="trendy-work-img">
                                            <img src="{{ asset('public/assets/img/work/work-1.png') }}" alt="" class="image-item">
                                        </div>
                                        <div class="trendy-work-overlay">
                                            <a href="#" class="title">Some Trendy work of us</a>
                                            <span></span>
                                            <p class="description">
                                                It is a long established fact that a reader will be distracted by the readable content of a
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6 mb-2">
                                <div class="trendy-work-content">
                                    <div class="trendy-work-content-inner">
                                        <div class="trendy-work-img">
                                            <img src="{{ asset('public/assets/img/work/work-2.png') }}" alt="" class="image-item">
                                        </div>
                                        <div class="trendy-work-overlay">
                                            <a href="#" class="title">Some Trendy work of us</a>
                                            <span></span>
                                            <p class="description">
                                                It is a long established fact that a reader will be distracted by the readable content of a
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-lg-3">
                    <div class="services-list">
                        <a href="#">Development and Maintenance</a>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                    <div class="project-sec mt-lg-5">
                        <div class="row ml-0">
                            <div class="col-lg-6 col-6 mb-2">
                                <div class="trendy-work-content">
                                    <div class="trendy-work-content-inner">
                                        <div class="trendy-work-img">
                                            <img src="{{ asset('public/assets/img/work/work-3.png') }}" alt="" class="image-item">
                                        </div>
                                        <div class="trendy-work-overlay">
                                            <a href="#" class="title">Some Trendy work of us</a>
                                            <span></span>
                                            <p class="description">
                                                It is a long established fact that a reader will be distracted by the readable content of a
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6 mb-2">
                                <div class="trendy-work-content">
                                    <div class="trendy-work-content-inner">
                                        <div class="trendy-work-img">
                                            <img src="{{ asset('public/assets/img/work/work-4.png') }}" alt="" class="image-item">
                                        </div>
                                        <div class="trendy-work-overlay">
                                            <a href="#" class="title">Some Trendy work of us</a>
                                            <span></span>
                                            <p class="description">
                                                It is a long established fact that a reader will be distracted by the readable content of a
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-lg-3">
                    <div class="services-list">
                        <a href="#">VR, AR and Game Development</a>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                        </p>
                    </div>
                    <div class="project-sec mt-lg-5">
                        <div class="row ml-0">
                            <div class="col-lg-6 col-6 mb-2">
                                <div class="trendy-work-content">
                                    <div class="trendy-work-content-inner">
                                        <div class="trendy-work-img">
                                            <img src="{{ asset('public/assets/img/work/work-1.png') }}" alt="" class="image-item">
                                        </div>
                                        <div class="trendy-work-overlay">
                                            <a href="#" class="title">Some Trendy work of us</a>
                                            <span></span>
                                            <p class="description">
                                                It is a long established fact that a reader will be distracted by the readable content of a
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6 mb-2">
                                <div class="trendy-work-content">
                                    <div class="trendy-work-content-inner">
                                        <div class="trendy-work-img">
                                            <img src="{{ asset('public/assets/img/work/work-2.png') }}" alt="" class="image-item">
                                        </div>
                                        <div class="trendy-work-overlay">
                                            <a href="#" class="title">Some Trendy work of us</a>
                                            <span></span>
                                            <p class="description">
                                                It is a long established fact that a reader will be distracted by the readable content of a
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
	
@endsection