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
                                <h3 class="nk-block-title page-title">Hire Us</h3>
                                <div class="nk-block-des text-soft">
                                    {{-- <p>Welcome to Lorem Studio Dashboard</p> --}}
                                </div>
                            </div><!-- .nk-block-head-content -->
                            {{-- <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            <li class="nk-block-tools-opt">
                                                <a href="#" class="btn btn-icon btn-sm btn-white btn-dim btn-outline-dark">
                                                	<i class='icon bx bx-plus'></i>
                                                	<p class="mr-2">Create</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </div><!-- .toggle-expand-content -->
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content --> --}}
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                    	<div class="row g-gs">
                            @if ($hireus->count() > 0)
                                @foreach ($hireus as $item)
                                    <div class="col-md-4">
                                        <div class="card card-bordered card-full custom-card">
                                            <div class="card-inner">
                                                <div class="card-title-group align-start mb-0">
                                                    <div class="card-title">
                                                        <h6 class="subtitle">{{ $item->customer_name }}</h6>
                                                    </div>
                                                    <div class="card-tools">
                                                        {{-- <em class="card-hint icon ni ni-help-fill" data-toggle="tooltip" data-placement="left" title="Total Deposited"></em> --}}

                                                        <a href="{{ route('admin.hireus.show', $item->id) }}" style="font-size: 11px;">Details</a>
                                                    </div>
                                                </div>
                                                <div class="card-amount">
                                                    <span class="amount">{{ $item->project_title }}</span>
                                                    @if ($item->status == 0)
                                                        <span class="change up text-success">
                                                            <em class="icon ni ni-arrow-long-up"></em>
                                                            New
                                                        </span>
                                                    @endif
                                                    @if ($item->status == 1)
                                                        <span class="change active text-primary">
                                                            <em class="icon ni ni-shrink"></em>
                                                            Active
                                                        </span>
                                                    @endif
                                                    @if ($item->status == 2)
                                                        <span class="change down text-danger">
                                                            <em class="icon ni ni-arrow-long-down"></em>
                                                            Archived
                                                        </span>
                                                    @endif
                                                </div>
                                                <div class="invest-data mt-3">
                                                    <div class="invest-data-amount g-2">
                                                        <div class="invest-data-history">
                                                            <div class="title">Contact No</div>
                                                            <div class="amount">{{ $item->customer_phone }}</div>
                                                        </div>
                                                        {{-- <div class="invest-data-history">
                                                            <div class="title">This Week</div>
                                                            <div class="amount">1,259.28 <span class="currency currency-usd">USD</span></div>
                                                        </div> --}}
                                                    </div>
                                                    <div class="invest-data-ck g-2">
                                                        {{-- <canvas class="iv-data-chart" id="totalDeposit"></canvas> --}}
                                                        {{-- <i class='bx bxs-file attachment-ico'></i> --}}
                                                        @if ($item->status == 0)
                                                            <a href="{{ route('admin.hireus.active_status', $item->id) }}" class="btn btn-info btn-sm btn-custom mb-1"><i class='bx bx-check-circle' ></i>&nbsp; Mark as Active</a>
                                                            <a href="{{ route('admin.hireus.archive_status', $item->id) }}" class="btn btn-dark btn-sm btn-custom"><i class='bx bx-archive' ></i>&nbsp; Mark as Archive</a>
                                                        @endif
                                                        @if ($item->status == 1)
                                                            <a href="{{ route('admin.hireus.archive_status', $item->id) }}" class="btn btn-dark btn-sm btn-custom mb-1"><i class='bx bx-archive' ></i>&nbsp; Mark as Archive</a>
                                                        @endif
                                                        @if ($item->status == 2)
                                                            <a href="{{ route('admin.hireus.active_status', $item->id) }}" class="btn btn-info btn-sm btn-custom mb-1"><i class='bx bx-check-circle' ></i>&nbsp; Mark as Active</a>
                                                        @endif
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- .card -->
                                    </div>
                                @endforeach
                            @else
                                <p class="ml-4">-- No data availabele --</p>
                            @endif
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection