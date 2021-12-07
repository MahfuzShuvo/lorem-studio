<section class="portfolio" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h5>Some Trendy work of us</h5>
                    <p>
                        It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
                    </p>
                </div>
                <div class="trendy-work-content-row row">
					@foreach (App\Portfolio::where('status', 1)->get() as $key => $port)
						<div class="trendy-work-content portfolio-content mix {{ App\Service::where('id', $port->service_id)->first()->slug }}">
							<div class="trendy-work-content-inner">
								<div class="trendy-work-img">
									<img src="{{ asset($port->thumbnail) }}" alt="" class="image-item">
								</div>
								<div class="trendy-work-overlay">
									<a href="{{ route('case_study', $port->id) }}" class="title">{{ $port->project_title }}</a>
									<span></span>
									<p class="description">
									{{ App\Service::where('id', $port->service_id)->first()->name }}
									</p>
								</div>
							</div>
						</div>
					@endforeach
                </div>
            </div>
        </div>
    </div>
</section>