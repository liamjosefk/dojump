<!DOCTYPE html>
<html lang="en">

<head>

{{--    Paste Analytics HERE--}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('page-name') | @yield('navbar-brand')</title>

    @yield('favicon')

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
    <link href="{{asset('css/zetemple.css')}}" rel="stylesheet">

    @yield('styles')

</head>

<body>

<!-- Navigation -->
<x-topbar.home></x-topbar.home>

<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            @yield('content')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <x-sidebar.home></x-sidebar.home>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<!-- Footer -->
<x-footer.home></x-footer.home>

<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('js/zetemple.js')}}"></script>

@yield('scripts')

</body>

</html>
