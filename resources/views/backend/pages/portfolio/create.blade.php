@extends('backend.partials.master')

@section('content')
	<div class="nk-content nk-content-fluid">
        <div class="container-xl wide-xl">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Create Portfolio</h3>
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
                                                    <a href="{{ route('admin.portfolio') }}" class="btn btn-icon btn-sm btn-white btn-dim btn-outline-dark">
                                                    	<i class='icon bx bx-show-alt'></i>
                                                    	<p class="mr-2">View</p>
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
                        <div class="card card-bordered">
                            <div class="card-inner">
                                {{-- <div class="card-head">
                                    <h5 class="card-title">Website Setting</h5>
                                </div> --}}
                                <form action="{{ url('/save_portfolio') }}" class="gy-3" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="site-name">Service <span class="text-danger" style="font-size: 11px;">*</span></label>
                                                <span class="form-note">Select the service which relates to your project </span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <select class="form-control @error('service') is-invalid @enderror" id="select2_service" name="service" data-search="on" data-placeholder="-- Choose --">
                                                        {{-- <option disabled selected hidden>Choose a package for delivery</option> --}}
                                                        <option></option>
                                                        @foreach (App\Service::all() as $service)
                                                            <option value="{{ $service->id }}">{{ $service->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('service')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label" for="site-name">Project Title <span class="text-danger" style="font-size: 11px;">*</span></label>
                                                <span class="form-note">Specify the name of your project</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="text" class="form-control @error('project_title') is-invalid @enderror" value="" name="project_title">
                                                    @error('project_title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label">Thumbnail <span class="text-danger" style="font-size: 11px;">*</span></label>
                                                <span class="form-note">Choose a image for project thumnail (max 1024mb)</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="file" class="custom-file-input @error('thumbnail') is-invalid @enderror" name="thumbnail">
                                                    <label class="custom-file-label">Choose file</label>
                                                    @error('thumbnail')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label">Cover Image <span class="text-danger" style="font-size: 11px;">*</span></label>
                                                <span class="form-note">Choose a image for project cover (max 1024mb)</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="file" class="custom-file-input @error('cover_image') is-invalid @enderror" name="cover_image">
                                                    <label class="custom-file-label">Choose file</label>
                                                    @error('cover_image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label">Project Images <span class="text-danger" style="font-size: 11px;">*</span></label>
                                                <span class="form-note">Choose one or more images for project (max 1024mb)</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <input type="file" multiple class="custom-file-input @error('image') is-invalid @enderror" name="image[]">
                                                    <label class="custom-file-label">Choose multiple files</label>
                                                    @error('image')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3 align-center">
                                        <div class="col-lg-5">
                                            <div class="form-group">
                                                <label class="form-label">Project Description <span class="text-danger" style="font-size: 11px;">*</span></label>
                                                <span class="form-note">Describe the project in brief (max 1000 words)</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-7">
                                            <div class="form-group">
                                                <div class="form-control-wrap">
                                                    <textarea type="text" class="form-control @error('project_description') is-invalid @enderror" value="" name="project_description"></textarea>
                                                    @error('project_description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-3">
                                        <div class="col-lg-7 offset-lg-5">
                                            <div class="form-group mt-2">
                                                <button type="submit" class="btn btn-sm btn-dark">Save</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('admin-script')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#select2_service').select2();
        });
    </script>
@endsection