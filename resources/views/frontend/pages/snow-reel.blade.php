@extends('frontend.partials.master')

@section('style')
    <style>

    </style>
@endsection

@section('content')
	<!-- header -->
	{{-- @include('frontend.partials.header-snow-reel') --}}
	<header id="header2">
    <div class="container header-content">
        <div class="row">
            <div class="col-lg-6 col-10 text-center">
                <div class="content-box">
                    <div class="row">
                        <div class="col-12 col-lg-8">
                            <h3>{{ $portfolio->project_title }}</h3>
                        </div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                    <a href="{{ route('hireus') }}" class="hire-btn">HIRE US NOW</a>
                </div>
            </div>
        </div>
    </div>
</header>

	<section id="case-study" class="case-study">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="case_part_init">
						<p>
							{{ $portfolio->project_description }}
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<img src="{{ asset($portfolio->thumbnail) }}" style="width: 100%;">
				</div>
			</div>
			<div class="row mt-2">
				<div class="col-md-12">
					<div class="case_part_end">
						{{-- <p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed scelerisque elementum velit, eget cursus augue scelerisque et. Maecenas efficitur dolor in ullamcorper suscipit. Duis tincidunt justo et massa porttitor sodales. Donec aliquam hendrerit mauris aliquam accumsan. Pellentesque lacinia erat vitae nisl blandit ornare. Nunc porttitor vel nisi ac viverra. Praesent cursus in elit id pulvinar. Mauris hendrerit tempus leo et eleifend.
						</p>
						<p>
							Cras egestas, sapien vitae fermentum varius, ligula metus eleifend velit, a pulvinar massa elit in metus. Mauris molestie, nisl ut ultricies volutpat, ipsum metus mattis nisi, eu dignissim velit ligula quis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius, urna convallis venenatis hendrerit, magna dolor lobortis magna, et vulputate erat felis non lectus. Ut viverra egestas nunc, et molestie tortor. Curabitur lectus libero, ultricies id aliquam lacinia, sodales at ex. Vestibulum odio urna, suscipit facilisis vehicula at, placerat quis quam. Cras fringilla neque dolor, nec consequat orci laoreet vitae. Mauris non fermentum felis. Integer bibendum vehicula dui ut semper. Phasellus lacus eros, varius nec egestas ac, cursus vel odio. Cras id ultricies lacus. Suspendisse dapibus, tellus ut placerat hendrerit, metus tortor congue ligula, eget tincidunt velit ligula nec augue. Phasellus ornare mi sed nulla imperdiet, vitae convallis quam placerat. Quisque vehicula tortor eget tellus finibus lacinia.
						</p> --}}

						<div class="mt-5">
							<h5 class="mb-3">Project Images</h5>
							@foreach (App\PortfolioImages::where('portfolio_id', $portfolio->id)->get() as $img)
								<img src="{{ asset($img->image) }}" style="width: 200px; height: 200px;">
							@endforeach
							{{-- <img src="{{ asset('public/assets/img/case_end.png') }}" style="width: 100%;">
							<div style="display: flex;">
								<img src="{{ asset('public/assets/img/case_end-2.png') }}" style="width: 50%;">
								<img src="{{ asset('public/assets/img/case_end-3.png') }}" style="width: 50%;">
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
@foreach (App\PortfolioSection::where('portfolio_id', $portfolio->id)->get() as $sec)
	<section id="tech" class="tech">
		<div class="container" data-aos="fade-up">
			<div class="case-tech">
				<h3>{{ $sec->title }}</h3>
				<p class="mt-3">
					{{ $sec->description }}
				</p>
			</div>
			<div class="case-tech-img text-center mt-4">
				<img src="{{ asset($sec->images) }}">
			</div>
		</div>
	</section>
@endforeach
	{{-- <section id="tech" class="tech">
		<div class="container" data-aos="fade-up">
			<div class="case-tech">
				<h2>Technology in Use</h2>
				<p class="mt-3">
					Cras egestas, sapien vitae fermentum varius, ligula metus eleifend velit, a pulvinar massa elit in metus. Mauris molestie, nisl ut ultricies volutpat, ipsum metus mattis nisi, eu dignissim velit ligula quis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius, urna convallis venenatis hendrerit, magna dolor lobortis magna, et vulputate erat felis non lectus. Ut viverra egestas nunc, et molestie tortor. Curabitur lectus libero, ultricies id aliquam lacinia, sodales at ex. Vestibulum odio urna, suscipit facilisis vehicula at, placerat quis quam. Cras fringilla neque dolor, nec consequat orci laoreet vitae. Mauris non fermentum felis. Integer bibendum vehicula dui ut semper. Phasellus lacus eros, varius nec egestas ac, cursus vel odio. Cras id ultricies lacus. Suspendisse dapibus, tellus ut placerat hendrerit, metus tortor congue ligula, eget tincidunt velit ligula nec augue. Phasellus ornare mi sed nulla imperdiet, vitae convallis quam placerat. Quisque vehicula tortor eget tellus finibus lacinia.
				</p>
			</div>
			<div class="case-tech-img text-center mt-4">
				<div class="row">
					<div class="col-lg-3 col-6">
						<img src="{{ asset('public/assets/img/sails.png') }}">
					</div>
					<div class="col-lg-3 col-6">
						<img src="{{ asset('public/assets/img/node.png') }}">
					</div>
					<div class="col-lg-3 col-6">
						<img src="{{ asset('public/assets/img/react.png') }}">
					</div>
					<div class="col-lg-3 col-6">
						<img src="{{ asset('public/assets/img/mongo.png') }}">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="tech" class="tech">
		<div class="container" data-aos="fade-up">
			<div class="case-tech">
				<h2>Challenges</h2>
				<p class="mt-3">
					Cras egestas, sapien vitae fermentum varius, ligula metus eleifend velit, a pulvinar massa elit in metus. Mauris molestie, nisl ut ultricies volutpat, ipsum metus mattis nisi, eu dignissim velit ligula quis eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum varius, urna convallis venenatis hendrerit, magna dolor lobortis magna, et vulputate erat felis non lectus. Ut viverra egestas nunc, et molestie tortor. Curabitur lectus libero, ultricies id aliquam lacinia, sodales at ex. Vestibulum odio urna, suscipit facilisis vehicula at, placerat quis quam. Cras fringilla neque dolor, nec consequat orci laoreet vitae. Mauris non fermentum felis. Integer bibendum vehicula dui ut semper. Phasellus lacus eros, varius nec egestas ac, cursus vel odio. Cras id ultricies lacus. Suspendisse dapibus, tellus ut placerat hendrerit, metus tortor congue ligula, eget tincidunt velit ligula nec augue. Phasellus ornare mi sed nulla imperdiet, vitae convallis quam placerat. Quisque vehicula tortor eget tellus finibus lacinia.
				</p>
			</div>
			<div class="case-tech-img mt-4">
				<div class="row">
					<div class="col-md-8">
						<img src="{{ asset('public/assets/img/case.png') }}" style="width: 100%;">
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="tech" class="tech">
		<div class="container" data-aos="fade-up">
			<div class="case-tech">
				<h2>Other Projects</h2>
			</div>
			<div class="project-sec mt-5">
				<div class="row">
					<div class="col-lg-3 col-6 mb-2">
						<div class="img-container">
                            <div class="project-img">
                                <img src="{{ asset('public/assets/img/service-1.png') }}" class="image">
                            </div>
							<div class="middle">
							    <a href="#" class="middle-name">
							    	<img src="{{ asset('public/assets/img/show_btn.svg') }}" style="width: 50%;">
							    	<p class="mt-2">View Case Study</p>
							    </a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6 mb-2">
						<div class="img-container">
                            <div class="project-img">
                                <img src="{{ asset('public/assets/img/service-2.png') }}" class="image">
                            </div>
							<div class="middle">
							    <a href="#" class="middle-name">
							    	<img src="{{ asset('public/assets/img/show_btn.svg') }}" style="width: 50%;">
							    	<p class="mt-2">View Case Study</p>
							    </a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6 mb-2">
						<div class="img-container">
                            <div class="project-img">
                                <img src="{{ asset('public/assets/img/service-3.png') }}" class="image">
                            </div>
							<div class="middle">
							    <a href="#" class="middle-name">
							    	<img src="{{ asset('public/assets/img/show_btn.svg') }}" style="width: 50%;">
							    	<p class="mt-2">View Case Study</p>
							    </a>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-6 mb-2">
						<div class="img-container">
							<div class="project-img">
                                <img src="{{ asset('public/assets/img/service-4.png') }}" class="image">
                            </div>
							<div class="middle">
							    <a href="#" class="middle-name">
							    	<img src="{{ asset('public/assets/img/show_btn.svg') }}" style="width: 50%;">
							    	<p class="mt-2">View Case Study</p>
							    </a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> --}}
@endsection