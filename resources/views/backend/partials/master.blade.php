<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('public/admin/assets/images/favicon.png')}}">
    <!-- Page Title  -->
    <title>Lorem Studio - Admin</title>

    <!-- StyleSheets  -->
    @include('backend.partials.assets-link.css-link')
    @yield('admin-style')
    
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
   
   	<div class="nk-app-root">
        <!-- wrap start -->
        <div class="nk-wrap ">

            <!-- header start -->
            @include('backend.partials.header')
            <!-- header end -->

            <!-- content -->
            @yield('content')
            <!-- content -->

            <!-- footer start -->
            @include('backend.partials.footer')
            <!-- footer end -->

        </div>
        <!-- wrap end -->
    </div>

    <!-- JavaScript -->
    @include('backend.partials.assets-link.js-link')
    @yield('admin-script')
</body>

</html>