<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
    <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,400;0,900;1,700&display=swap" rel="stylesheet">
    
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-7RS358E60B"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-7RS358E60B');
    </script>

    @yield('styles')

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="{{ url('home') }}">
                    DJ
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav m-auto">

                        <li class="nav-item">
                            <a class="nav-link {{ Request::is('/*') ? 'active' : '' }}" href="{{route('home')}}">Home
                            </a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a class="nav-link {{ Request::routeIs('home.on_stage') ? 'active' : '' }}" href="{{route('home.on_stage')}}">On-Stage</a>--}}
{{--                        </li>--}}
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle {{ Request::is('services/*') ? 'active' : '' }}" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="servicesDropdown">Services</a>
                            <!-- Dropdown - Services Menu -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="servicesDropdown">
                                <a class="dropdown-item {{ Request::routeIs('home.services.directing') ? 'disabled' : '' }}" href="{{route('home.services.directing')}}">
                                    Directing
                                </a>
                                <a class="dropdown-item {{ Request::routeIs('home.services.corporate') ? 'disabled' : '' }}" href="{{route('home.services.corporate')}}">
                                    Corporate / Civic Events
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle {{ Request::is('portfolio/*') ? 'active' : '' }}" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="portfolioDropdown">Portfolio</a>
                            <!-- Dropdown - Portfolio Menu -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="portfolioDropdown">
                                <a class="dropdown-item {{ Request::routeIs('home.portfolio.stage') ? 'disabled' : '' }}" href="{{route('home.portfolio.stage')}}">
                                    Stage
                                </a>
                                <a class="dropdown-item {{ Request::routeIs('home.portfolio.video') ? 'disabled' : '' }}" href="{{route('home.portfolio.video')}}">
                                    Videos
                                </a>
                                <a class="dropdown-item {{ Request::routeIs('home.portfolio.photo') ? 'disabled' : '' }}" href="{{route('home.portfolio.photo')}}">
                                    Photos
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle {{ Request::is('reviews/*') ? 'active' : '' }}" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="reviewDropdown">Reviews</a>
                            <!-- Dropdown - Reviews Menu -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="reviewDropdown">
                                <a class="dropdown-item {{ Request::routeIs('home.reviews.critic') ? 'disabled' : '' }}" href="{{route('home.reviews.critic')}}">
                                    Critic
                                </a>
                                <a class="dropdown-item {{ Request::routeIs('home.reviews.audience') ? 'disabled' : '' }}" href="{{route('home.reviews.audience')}}">
                                    Audience
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('home.that') ? 'active' : '' }}" href="{{route('home.that')}}">That Happened</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('home.donate') ? 'active' : '' }}" href="{{route('home.donate')}}">Donate</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Request::routeIs('home.contact') ? 'active' : '' }}" href="{{route('home.contact')}}">Contact</a>
                        </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
{{--                    <ul class="navbar-nav ms-auto hidden">--}}
{{--                        <!-- Authentication Links -->--}}
{{--                        @guest--}}
{{--                            @if (Route::has('login'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}

{{--                            @if (Route::has('register'))--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>--}}
{{--                                </li>--}}
{{--                            @endif--}}
{{--                        @else--}}
{{--                            <li class="nav-item dropdown">--}}
{{--                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                    {{ Auth::user()->name }}--}}
{{--                                </a>--}}

{{--                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                    <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        {{ __('Logout') }}--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                        @csrf--}}
{{--                                    </form>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                        @endguest--}}
{{--                    </ul>--}}
                </div>
{{--                <div>--}}
{{--                    <a href="{{route('home.that')}}" class="btn btn-lav btn-lg">"THAT HAPPENED"</a>--}}
{{--                </div>--}}
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    @yield('scripts')
</body>
</html>
