@extends('backend.partials.master')

@section('admin-style')
    <style type="text/css">
        .dataTable td {
            white-space: normal;
        }
        .tb-desc {
            text-align: justify;
        }
        .tb-images {
            display: flex;
            flex-wrap: wrap;
        }
        .tb-images img {
            width: 40px;
            padding: 4px;
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
                                <h3 class="nk-block-title page-title">Portfolio</h3>
                                <div class="nk-block-des text-soft">
                                    {{-- <p>Welcome to Lorem Studio Dashboard</p> --}}
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            {{-- <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li>
                                            <li><a href="#" class="btn btn-white btn-dim btn-outline-primary"><em class="icon ni ni-reports"></em><span>Reports</span></a></li> --}}
                                            <li class="nk-block-tools-opt">
                                                {{-- <div class="drodown"> --}}
                                                    <a href="{{ route('portfolio.create') }}" class="btn btn-icon btn-sm btn-white btn-dim btn-outline-dark">
                                                    	<i class='icon bx bx-plus'></i>
                                                    	<p class="mr-2">Create</p>
                                                    </a>
                                                    {{-- <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="#"><em class="icon ni ni-user-add-fill"></em><span>Add User</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-coin-alt-fill"></em><span>Add Order</span></a></li>
                                                            <li><a href="#"><em class="icon ni ni-note-add-fill-c"></em><span>Add Page</span></a></li>
                                                        </ul>
                                                    </div> --}}
                                                {{-- </div> --}}
                                            </li>
                                        </ul>
                                    </div><!-- .toggle-expand-content -->
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
            		<div class="nk-block nk-block-lg">
                            <div class="card card-bordered custom-card">
                                <div class="card-inner">
                                    <table class="datatable-init nk-tb-list nk-tb-ulist" data-auto-responsive="false">
                                        <thead>
                                            <tr class="nk-tb-item nk-tb-head">
                                                {{-- <th class="nk-tb-col nk-tb-col-check">
                                                    <div class="custom-control custom-control-sm custom-checkbox notext">
                                                        <input type="checkbox" class="custom-control-input" id="uid">
                                                        <label class="custom-control-label" for="uid"></label>
                                                    </div>
                                                </th> --}}
                                                <th class="nk-tb-col"><span class="sub-text">SL</span></th>
                                                <th class="nk-tb-col"><span class="sub-text">Project Title</span></th>
                                                <th class="nk-tb-col tb-col-mb"><span class="sub-text">Project Images</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Cover</span></th>
                                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Description</span></th>
                                                <th class="nk-tb-col tb-col-lg"><span class="sub-text">Service</span></th>
                                                <th class="nk-tb-col tb-col-md"><span class="sub-text">Status</span></th>
                                                <th class="nk-tb-col nk-tb-col-tools text-right">
                                                </th>
                                            </tr>
                                        </thead>
                                        @php
                                            $n = 1;
                                        @endphp
                                        <tbody>
                                            @foreach ($portfolios as $portfolio)
                                                <tr class="nk-tb-item">
                                                    {{-- <td class="nk-tb-col nk-tb-col-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox notext">
                                                            <input type="checkbox" class="custom-control-input" id="uid1">
                                                            <label class="custom-control-label" for="uid1"></label>
                                                        </div>
                                                    </td> --}}
                                                    <td class="nk-tb-col">{{ $n }}</td>
                                                    <td class="nk-tb-col">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-dim-primary d-none d-sm-flex">
                                                                <span>
                                                                    <img src="{{ asset($portfolio->thumbnail) }}">
                                                                </span>
                                                            </div>
                                                            <div class="user-info">
                                                                <span class="tb-lead">{{ $portfolio->project_title }} <span class="dot dot-success d-md-none ml-1"></span></span>
                                                                {{-- <span>info@softnio.com</span> --}}
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-mb" data-order="35040.34">
                                                        <span class="tb-images">
                                                            @foreach (App\PortfolioImages::where('portfolio_id', $portfolio->id)->get() as $img)
                                                                <img src="{{ asset($img->image) }}">
                                                            @endforeach
                                                        </span>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        <img src="{{ asset($portfolio->cover_image) }}" style="width: 50px;">
                                                    </td>
                                                    
                                                    <td class="nk-tb-col tb-col-lg">
                                                        <p class="tb-desc">{{ $portfolio->project_description }}</p>
                                                    </td>
                                                    <td class="nk-tb-col tb-col-lg">
                                                        {{ App\Service::where('id', $portfolio->service_id)->first()->name }}
                                                    </td>
                                                    <td class="nk-tb-col tb-col-md">
                                                        @if ($portfolio->status == 0)
                                                            <span class="badge badge-pill badge-outline-primary" style="font-size: 11px;"><b>Normal</b></span>
                                                        @else
                                                            <span class="badge badge-pill badge-outline-warning" style="font-size: 11px;"><b>Trendy</b></span>
                                                        @endif
                                                    </td>
                                                    <td class="nk-tb-col nk-tb-col-tools">
                                                        <ul class="nk-tb-actions gx-1">
                                                            {{-- <li class="nk-tb-action-hidden">
                                                                <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Wallet">
                                                                    <em class="icon ni ni-wallet-fill"></em>
                                                                </a>
                                                            </li>
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                                    <em class="icon ni ni-mail-fill"></em>
                                                                </a>
                                                            </li>
                                                            <li class="nk-tb-action-hidden">
                                                                <a href="#" class="btn btn-trigger btn-icon" data-toggle="tooltip" data-placement="top" title="Suspend">
                                                                    <em class="icon ni ni-user-cross-fill"></em>
                                                                </a>
                                                            </li>
                                                            <li> --}}
                                                                <div class="drodown">
                                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                    <div class="dropdown-menu dropdown-menu-right">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li>
                                                                                <a href="{{ route('portfolio.show', $portfolio->id) }}">
                                                                                    <em class="icon ni ni-eye"></em>
                                                                                    <span>View</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="{{ route('portfolio.edit', $portfolio->id) }}">
                                                                                    <em class="icon ni ni-edit"></em>
                                                                                    <span>Edit</span>
                                                                                </a>
                                                                            </li>
                                                                            <li>
                                                                                <a data-target="#deleteModal{{ $portfolio->id }}" data-toggle="modal">
                                                                                    <em class="icon ni ni-trash"></em>
                                                                                    <span>Delete</span>
                                                                                </a>
                                                                            </li>
                                                                            <li class="divider"></li>
                                                                            @if ($portfolio->status == 0)
                                                                                <li>
                                                                                    <a href="{{ route('portfolio.status', $portfolio->id) }}" class="text-warning">
                                                                                        <em class="icon ni ni-check-circle-fill"></em>
                                                                                        <span>Mark as Trendy</span>
                                                                                    </a>
                                                                                </li>
                                                                            @else
                                                                                <li>
                                                                                    <a href="{{ route('portfolio.status', $portfolio->id) }}" class="text-primary">
                                                                                        <em class="icon ni ni-cross-circle-fill"></em>
                                                                                        <span>Mark as Normal</span>
                                                                                    </a>
                                                                                </li>
                                                                            @endif
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </td>
                                                </tr>
                                                <!-- Delete Modal start -->
                                                <div class="modal fade" tabindex="-1" id="deleteModal{{ $portfolio->id }}">
                                                    <div class="modal-dialog modal-dialog-top" role="document">
                                                        <div class="modal-content">
                                                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                                <em class="icon ni ni-cross"></em>
                                                            </a>
                                                            <div class="modal-header">
                                                                <h6 class="modal-title">Are you sure to delete?</h6>
                                                            </div>
                                                            {{-- <div class="modal-body">
                                                                
                                                            </div> --}}
                                                            <div class="modal-footer">
                                                                <form action="{{ route('portfolio.delete', $portfolio->id) }}" method="post">
                                                                    @method('delete')
                                                                    {{ csrf_field() }}
                                                                    <button type="submit" class="btn btn-info btn-sm" style="font-size: 13px;">YES, delete permanently</button>
                                                                </form>
                                                                <button type="button" class="btn btn-dark btn-sm" data-dismiss="modal" style="font-weight: 400; font-size: 12px;">NO</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Delete Modal end -->
                                                @php
                                                    $n++;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- .card-preview -->
                        </div> <!-- nk-block -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection