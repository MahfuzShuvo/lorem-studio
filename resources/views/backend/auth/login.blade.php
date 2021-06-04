{{-- @extends('layouts.app') --}}

{{-- @section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Admin Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login.submit') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('admin.password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}


<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('public/admin/assets/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>Login | Lorem Studio</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('public/admin/assets/css/dashlite.css')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('public/admin/assets/css/theme.css')}}">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="#" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="{{asset('public/assets/img/logo.svg')}}" srcset="{{asset('public/assets/img/logo2x.svg 2x')}}" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="{{asset('public/assets/img/logo-dark.svg')}}" srcset="{{asset('public/assets/img/logo-dark2x.svg 2x')}}" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered custom-card">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content text-center">
                                        <h4 class="nk-block-title">Sign-In</h4>
                                        <div class="nk-block-des">
                                            <p><small>Access the Lorem Studio panel using your email and password</small></p>
                                        </div>
                                    </div>
                                </div>
                                <form method="POST" action="{{ route('admin.login.submit') }}">
                                    @csrf
                                    
                                    <div class="form-group">
                                        {{-- <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email</label>
                                        </div> --}}
                                        <input type="email" class="form-control form-control-sm custom-form-input @error('email') is-invalid @enderror" name="email" placeholder="Email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        {{-- <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                            
                                        </div> --}}
                                        <div class="form-control-wrap">
                                            {{-- <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a> --}}
                                            <input type="password" class="form-control form-control-sm custom-form-input @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-sm btn-dark btn-block">SIGN IN</button>
                                    </div>
                                </form>
                                <div class="form-note-s2 text-center pt-4"> 
                                    {{-- New on our platform? 
                                    <a href="html/pages/auths/auth-register-v2.html">Create an account</a> --}}
                                    <a class="link link-primary link-sm" href="{{ route('admin.password.request') }}">Forgot Password?</a>
                                </div>
                                <div class="text-center pt-4 pb-3">
                                    <h6 class="overline-title overline-title-sap"><span>OR</span></h6>
                                </div>
                                <ul class="nav justify-center gx-4">
                                    <li class="nav-item"><a class="nav-link" href="#">Facebook</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Google</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{asset('public/admin/assets/js/bundle.js')}}"></script>
    <script src="{{asset('public/admin/assets/js/scripts.js')}}"></script>

</html>