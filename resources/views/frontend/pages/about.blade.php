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

    <section id="about" class="about secondary-section">
        <div class="container" data-aos="fade-up">
            <div class="row">
                <div class="col-lg-7">
                    <div class="about-box">
                        <div class="img-box-first">
                            <img class="img-first" src="{{ asset('public/assets/img/about-1.png') }}">
                        </div>
                        <div class="img-box-second">
                            <img class="img-second" src="{{ asset('public/assets/img/about-2.png') }}">
                        </div>
                        <div class="img-box-third">
                            <img class="img-third" src="{{ asset('public/assets/img/about-3.png') }}">
                        </div>
                        <div class="img-box-fourth">
                            <img class="img-fourth" src="{{ asset('public/assets/img/about-4.png') }}">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="section-title-about">
                        <h2>We are creative agency from Bangladesh. Isn't it awesome?</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque elementum velit, eget cursus augue scelerisque et. Maecenas efficitur dolor in ullamcorper suscipit. Duis tincidunt justo et massa porttitor sodales. Donec aliquam hendrerit mauris aliquam accumsan. Pellentesque lacinia erat vitae nisl blandit ornare. Nunc porttitor vel nisi ac viverra. Praesent cursus in elit id pulvinar. Mauris hendrerit tempus leo et eleifend.
                        </p>
                        <p>
                            Cras egestas, sapien vitae fermentum varius, ligula metus eleifend velit, a pulvinar massa elit in metus. Mauris molestie, nisl ut ultricies volutpat, ipsum metus mattis
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-title-about mt-0">
                <h2>Our Story</h2>
            </div>
            <div class="timeline">
                <ul>
                    <li>
                        <div class="timeline-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque elementum velit, eget cursus augue scelerisque et. Maecenas efficitur dolor in ullamcorper suscipit. Duis tincidunt justo et massa porttitor sodales. Donec aliquam hendrerit mauris aliquam accumsan. Pellentesque lacinia erat vitae nisl blandit ornare. Nunc porttitor vel nisi ac viverra. Praesent cursus in elit id pulvinar. Mauris hendrerit tempus leo et eleifend.
                            </p>
                            <p>
                                Cras egestas, sapien vitae fermentum varius, ligula metus eleifend velit, a pulvinar massa elit in metus. Mauris molestie, nisl ut ultricies volutpat, ipsum metus mattis nisi, eu dignissim velit ligula quis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius, urna convallis
                            </p>
                        </div>
                        <div class="time">
                            <h4>2019</h4>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque elementum velit, eget cursus augue scelerisque et. Maecenas efficitur dolor in ullamcorper suscipit. Duis tincidunt justo et massa porttitor sodales. Donec aliquam hendrerit mauris aliquam accumsan. Pellentesque lacinia erat vitae nisl blandit ornare. Nunc porttitor vel nisi ac viverra. Praesent cursus in elit id pulvinar. Mauris hendrerit tempus leo et eleifend.
                            </p>
                            <p>
                                Cras egestas, sapien vitae fermentum varius, ligula metus eleifend velit, a pulvinar massa elit in metus. Mauris molestie, nisl ut ultricies volutpat, ipsum metus mattis nisi, eu dignissim velit ligula quis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius, urna convallis
                            </p>
                        </div>
                        <div class="time">
                            <h4>2018</h4>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque elementum velit, eget cursus augue scelerisque et. Maecenas efficitur dolor in ullamcorper suscipit. Duis tincidunt justo et massa porttitor sodales. Donec aliquam hendrerit mauris aliquam accumsan. Pellentesque lacinia erat vitae nisl blandit ornare. Nunc porttitor vel nisi ac viverra. Praesent cursus in elit id pulvinar. Mauris hendrerit tempus leo et eleifend.
                            </p>
                            <p>
                                Cras egestas, sapien vitae fermentum varius, ligula metus eleifend velit, a pulvinar massa elit in metus. Mauris molestie, nisl ut ultricies volutpat, ipsum metus mattis nisi, eu dignissim velit ligula quis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius, urna convallis
                            </p>
                        </div>
                        <div class="time">
                            <h4>2017</h4>
                        </div>
                    </li>
                </ul>
            </div>
            <div style="clear: both;"></div>
        </section>

        <section class="why-choose-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="section-title-about mt-0">
                            <h2>Why <br>choose us?</h2>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="why-choose-us-content">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque elementum velit, eget cursus augue scelerisque et. Maecenas efficitur dolor in ullamcorper suscipit. Duis tincidunt justo et massa porttitor sodales. Donec aliquam hendrerit mauris aliquam accumsan. Pellentesque lacinia erat vitae nisl blandit ornare. Nunc porttitor vel nisi ac viverra. Praesent cursus in elit id pulvinar. Mauris hendrerit tempus leo et eleifend. Cras egestas, sapien vitae fermentum varius, ligula metus eleifend velit, a pulvinar massa elit in metus. Mauris molestie, nisl ut ultricies volutpat, ipsum metus mattis nisi, eu dignissim velit ligula quis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius, urna convallis venenatis hendrerit, magna dolor lobortis magna, et vulputate erat felis non lectus. Ut viverra egestas nunc, et molestie tortor. Curabitur lectus libero, ultricies id aliquam lacinia, sodales at ex. Vestibulum odio urna, suscipit facilisis vehicula at, placerat quis quam. Cras fringilla neque dolor, nec consequat orci laoreet vitae. Mauris non fermentum felis. Integer bibendum vehicula dui ut semper. Phasellus lacus eros, varius nec egestas ac, cursus vel odio. Cras id ultricies lacus. Suspendisse dapibus, tellus ut placerat hendrerit, metus tortor congue ligula, eget tincidunt velit ligula nec augue. Phasellus ornare mi sed nulla imperdiet, vitae convallis quam placerat. Quisque vehicula tortor eget tellus finibus lacinia.
                            </p>
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