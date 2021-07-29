@extends('backend.partials.master')

@section('admin-style')
    <style type="text/css">
        .btn-custom {
            width: 140px;
        }
        .custom-card {
            border-radius: 10px;
            box-shadow: 0px 0px 6px #00000026;
        }
        .change {
            font-size: 11px;
            font-weight: 600;
        }
        .ico-attach {
            font-size: 60px;
            color: #5b6369;
        }
        .ico-attach:hover {
            color: #101924;
        }
        .port-title {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .sec-title h6 {
            background: #1f2b3a;
            padding: 6px 20px;
            font-size: 15px;
            color: #ffffff;
            font-weight: 300;
            border-radius: 5px;
            width: fit-content;
        }
    </style>
@endsection

@section('content')
	<div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Portfolio Details</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="{{ route('admin.portfolio') }}" class="btn btn-icon btn-sm btn-white btn-dim btn-outline-dark">
                                                	<i class='icon bx bx-show-alt'></i>
                                                	<p class="mr-2">View all</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- .toggle-expand-content -->
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                    	<div class="row g-gs">
                            <div class="col-md-12">
                                <div class="card card-bordered card-full custom-card">
                                    <div class="card-inner">
                                        <div class="port-title">
                                            <div class="card-amount">
                                                <span class="amount">{{ $portfolio->project_title }}</span>
                                                @if ($portfolio->status == 1)
                                                    <span class="change text-warning">
                                                        <em class="icon ni ni-star-fill"></em>
                                                        Trendy
                                                    </span>
                                                @else
                                                    <span class="change text-primary">
                                                        <em class="icon ni ni-shrink"></em>
                                                        Not Trendy
                                                    </span>
                                                @endif
                                            </div>
                                            <div class="card-tools">
                                                @if ($portfolio->status == 0)
                                                    <a href="{{ route('portfolio.status', $portfolio->id) }}" class="btn btn-warning btn-sm btn-custom"><i class='bx bx-check-circle' ></i>&nbsp; Mark as Trendy</a>
                                                @else
                                                    <a href="{{ route('portfolio.status', $portfolio->id) }}" class="btn btn-primary btn-sm btn-custom mb-1"><i class='bx bx-check-circle' ></i>&nbsp; Mark as Normal</a>
                                                @endif
                                            </div>
                                        </div>
                                        
                                        <div class="invest-data-history mt-3">
                                            <div class="title">Description</div>
                                            <p>{{ $portfolio->project_description }}</p>
                                        </div>
                                        <div class="invest-data mt-3">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">Thumnail</div>
                                                    <div class="amount">
                                                        <img src="{{ asset($portfolio->thumbnail) }}" width="120px">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="invest-data-history">
                                                <div class="title">Cover Image</div>
                                                <div class="amount">
                                                    <img src="{{ asset($portfolio->cover_image) }}" width="300px">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="invest-data-history mt-3">
                                            <div class="title">Portfolio Images</div>
                                            @foreach (App\PortfolioImages::where('portfolio_id', $portfolio->id)->get() as $img)
                                                <img src="{{ asset($img->image) }}" class="mr-2" width="120px">
                                                
                                            @endforeach
                                        </div>
                                        <div class="invest-data mt-4">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">Service Name</div>
                                                    <div class="amount">{{ App\Service::where('id', $portfolio->service_id)->first()->name }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        @php
                                            $n = 1;
                                        @endphp
                                        @foreach (App\PortfolioSection::where('portfolio_id', $portfolio->id)->get() as $sec)
                                            <div class="sec-title mt-4">
                                                <h6>Section #{{ $n }}</h6>
                                            </div>
                                            <div class="invest-data mt-3">
                                                <div class="invest-data-amount g-2">
                                                    <div class="invest-data-history">
                                                        <div class="title">Title</div>
                                                        <div class="amount">{{ $sec->title }}</div>
                                                    </div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">Description</div>
                                                    <div class="amount">{{ $sec->title }}</div>
                                                </div>
                                            </div>
                                            <div class="invest-data mt-3">
                                                <div class="invest-data-amount g-2">
                                                    <div class="invest-data-history">
                                                        <div class="title">Image</div>
                                                        <div class="amount">
                                                            <img src="{{ asset($sec->images) }}" width="120px">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @php
                                                $n++;
                                            @endphp
                                        @endforeach
                                    </div>
                                </div><!-- .card -->
                            </div>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin-script')
    <script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
@endsection