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
        .services-list {
            margin: 0px;
        }
        .services-list:hover .services-header{
            color: #1B8CFD;
        }
        .services-list a::after {
            content: none;
        }
        .services-list p {
            margin-top: 10px;
        }
        .form-check-input {
            margin-top: .6rem;
        }
        .form-check-input:hover .services-header{
            color: #1B8CFD;
        }
    </style>
@endsection

@section('content')

    <section id="hireus" class="hireus secondary-section">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h5>Contact Us</h5>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>
            </div>
            <div class="contact-row mt-lg-5 mb-lg-5">
                <div class="card contact-card">
                    <div class="card-inner contact-card-inner">
                        <div class="contact-widget">
                            <div class="contact-widget-ico">
                                <i class='bx bxs-envelope'></i>
                            </div>
                            <div class="contact-widget-details">
                                <p>info@lorem.studio</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card contact-card">
                    <div class="card-inner contact-card-inner-middle">
                        <div class="contact-widget">
                            <div class="contact-widget-ico">
                                <i class='bx bxs-map'></i>
                            </div>
                            <div class="contact-widget-details">
                                <p>01 Overille Road Apt.786 California, USA</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card contact-card">
                    <div class="card-inner contact-card-inner">
                        <div class="contact-widget">
                            <div class="contact-widget-ico">
                                <i class='bx bxs-phone' ></i>
                            </div>
                            <div class="contact-widget-details">
                                <p>+123 456 789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="#" method="post" enctype="multipart/form-data" style="margin-left: -20px;">
                @csrf
                <div class="row mt-4 ml-1">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-custom" id="exampleFormControlInput1" placeholder="Your full name*">
                                    </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-custom" id="exampleFormControlInput1" placeholder="Email address*">
                                    </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-custom" id="exampleFormControlInput1" placeholder="Subject">
                                    </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-control form-control-custom" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="form-group mt-2" style="margin-left: 15px;">
                                <button class="btn btn-dark form-control-custom-btn" type="submit">SEND MESSAGE</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
	
@endsection