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
                <h5>Handover your pain to us!</h5>
                <p>
                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                </p>
            </div>
            <form action="{{ url('/hire_us') }}" method="post" enctype="multipart/form-data" style="margin-left: -20px;">
					@csrf
					
					<div class="row mt-lg-5">
						<div class="col-lg-6 mt-lg-4">
							<div class="form-check">
								<div class="row">
									<div class="col-lg-8 col-10">
										<label class="form-check-label" for="exampleCheck1">
                                            <div class="services-list">
                                                <a class="services-header">Brand Identity Design</a>
                                                <p>
                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                </p>
                                            </div>
										</label>
										
									</div>
									<div class="col-lg-4 col-2 text-center">
										<input type="checkbox" class="form-check-input" id="exampleCheck1" value="Brand Identity Design" name="service[]">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mt-lg-4">
							<div class="form-check">
								<div class="row">
									<div class="col-lg-8 col-10">
										<label class="form-check-label" for="exampleCheck2">
                                            <div class="services-list">
                                                <a class="services-header">UI & UX Design</a>
                                                <p>
                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                </p>
                                            </div>
										</label>
										
									</div>
									<div class="col-lg-4 col-2 text-center">
										<input type="checkbox" class="form-check-input" id="exampleCheck2" value="UI & UX Design" name="service[]">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mt-lg-4">
							<div class="form-check">
								<div class="row">
									<div class="col-lg-8 col-10">
										<label class="form-check-label" for="exampleCheck3">
                                            <div class="services-list">
                                                <a class="services-header">Print Design & Marketing Material</a>
                                                <p>
                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                </p>
                                            </div>
										</label>
										
									</div>
									<div class="col-lg-4 col-2 text-center">
										<input type="checkbox" class="form-check-input" id="exampleCheck3" value="Print Design & Marketing Material" name="service[]">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mt-lg-4">
							<div class="form-check">
								<div class="row">
									<div class="col-lg-8 col-10">
										<label class="form-check-label" for="exampleCheck4">
                                            <div class="services-list">
                                                <a class="services-header">Development and Maintenance</a>
                                                <p>
                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                </p>
                                            </div>
										</label>
										
									</div>
									<div class="col-lg-4 col-2 text-center">
										<input type="checkbox" class="form-check-input" id="exampleCheck4" value="Development and Maintenance" name="service[]">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 mt-lg-4">
							<div class="form-check">
								<div class="row">
									<div class="col-lg-8 col-10">
										<label class="form-check-label" for="exampleCheck5">
                                            <div class="services-list">
                                                <a class="services-header">VR, AR and Game Development</a>
                                                <p>
                                                    It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                                                </p>
                                            </div>
										</label>
										
									</div>
									<div class="col-lg-4 col-2 text-center">
										<input type="checkbox" class="form-check-input" id="exampleCheck5" value="VR, AR and Game Development" name="service[]">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row mt-4 ml-1">
						<div class="col-md-8">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									    <input type="text" class="form-control form-control-custom" placeholder="Your full name*" name="customer_name">
									 </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <input type="email" class="form-control form-control-custom" placeholder="Email address*" name="customer_email">
									 </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <input type="text" class="form-control form-control-custom" placeholder="Phone number*" name="customer_phone">
									 </div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
									    <input type="text" class="form-control form-control-custom" placeholder="Project title*" name="project_title">
									 </div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
									    <textarea class="form-control form-control-custom" id="exampleFormControlTextarea1" rows="5" placeholder="Project description" name="project_description"></textarea>
									</div>
								</div>
								<div class="col-md-12 mb-3">
									<input type="file" name="attachment[]" multiple />
								</div>
								<div class="form-group mt-2" style="margin-left: 15px;">
									<button class="btn btn-dark form-control-custom-btn" type="submit">HIRE US NOW</button>
								</div>
							</div>
						</div>
					</div>
				</form>
        </div>
    </section>
	
@endsection