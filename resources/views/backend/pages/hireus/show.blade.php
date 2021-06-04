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
                                <h3 class="nk-block-title page-title">Hiring Details</h3>
                            </div>
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="{{ route('admin.hireus') }}" class="btn btn-icon btn-sm btn-white btn-dim btn-outline-dark">
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
                                        <div class="card-title-group align-start mb-0">
                                            <div class="card-title">
                                                <h6 class="subtitle"><b>Customer Name: </b>{{ $hireus->customer_name }}</h6>
                                            </div>
                                            <div class="card-tools">
                                                @if ($hireus->status == 0)
                                                    <a href="{{ route('admin.hireus.active_status', $hireus->id) }}" class="btn btn-info btn-sm btn-custom"><i class='bx bx-check-circle' ></i>&nbsp; Mark as Active</a>
                                                    <a href="{{ route('admin.hireus.archive_status', $hireus->id) }}" class="btn btn-dark btn-sm btn-custom"><i class='bx bx-archive' ></i>&nbsp; Mark as Archive</a>
                                                @endif
                                                @if ($hireus->status == 1)
                                                    <a href="{{ route('admin.hireus.archive_status', $hireus->id) }}" class="btn btn-dark btn-sm btn-custom"><i class='bx bx-archive' ></i>&nbsp; Mark as Archive</a>
                                                @endif
                                                @if ($hireus->status == 2)
                                                    <a href="{{ route('admin.hireus.active_status', $hireus->id) }}" class="btn btn-info btn-sm btn-custom mb-1"><i class='bx bx-check-circle' ></i>&nbsp; Mark as Active</a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="card-amount">
                                            <span class="amount">{{ $hireus->project_title }}</span>
                                            @if ($hireus->status == 0)
                                                <span class="change up text-success">
                                                    <em class="icon ni ni-arrow-long-up"></em>
                                                    New
                                                </span>
                                            @endif
                                            @if ($hireus->status == 1)
                                                <span class="change active text-primary">
                                                    <em class="icon ni ni-shrink"></em>
                                                    Active
                                                </span>
                                            @endif
                                            @if ($hireus->status == 2)
                                                <span class="change down text-danger">
                                                    <em class="icon ni ni-arrow-long-down"></em>
                                                    Archived
                                                </span>
                                            @endif
                                        </div>
                                        <div class="invest-data-history mt-3">
                                            <div class="title">Description</div>
                                            <p>{{ $hireus->project_description }}</p>
                                        </div>
                                        <div class="invest-data-history mt-3">
                                            <div class="title">Attchments</div>
                                            @foreach (App\HireusAttachment::where('hireus_id', $hireus->id)->get() as $img)
                                                @if (empty($img))
                                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="no file attached">
                                                        <i class='bx bx-file-blank' ></i>
                                                    </a>
                                                @else
                                                    @if ($img->ext == "pdf" || $img->ext == "gif" || $img->ext == "jpg" || $img->ext == "png" || $img->ext == "txt" || $img->ext == "html" || $img->ext == "doc" || $img->ext == "css" || $img->ext == "json" || $img->ext == "js")
                                                        <a href="{{ asset($img->attachment) }}" data-toggle="tooltip" data-placement="bottom" title=".{{ $img->ext }} file attached">
                                                            <i class='bx bxs-file-{{ $img->ext }} ico-attach'></i>
                                                        </a>
                                                    @else
                                                        <a href="{{ asset($img->attachment) }}" data-toggle="tooltip" data-placement="bottom" title=".{{ $img->ext }} file attached">
                                                            <i class='bx bxs-file ico-attach'></i>
                                                        </a>
                                                    @endif
                                                @endif
                                                
                                            @endforeach
                                        </div>
                                        <div class="invest-data mt-4">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">Service Name</div>
                                                    <div class="amount">{{ $hireus->service }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="invest-data mt-3">
                                            <div class="invest-data-amount g-2">
                                                <div class="invest-data-history">
                                                    <div class="title">Contact No</div>
                                                    <div class="amount">{{ $hireus->customer_phone }}</div>
                                                </div>
                                                <div class="invest-data-history">
                                                    <div class="title">Email</div>
                                                    <div class="amount">{{ $hireus->customer_email }}</div>
                                                </div>
                                                {{-- <div class="invest-data-history">
                                                    <div class="title">This Week</div>
                                                    <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                </div> --}}
                                            </div>
                                        </div>
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