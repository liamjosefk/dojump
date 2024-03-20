<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Do Jump</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


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

    <!-- Styles -->
    <style>
        .background-content {
            background-image: url("{{asset('storage/images/trapeze-loop-low-opacity.jpg')}}");
            background-size: cover;
            background-repeat: no-repeat;
            background-height: auto;
            background-position: center;
        }
        .svg-back {
            height: 100vh;
        }
        .carousel-inner>.item {
            -webkit-transition: 0s !important;
            -o-transition: 0s !important;
            transition: 0s !important;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-lav fixed-top">
    <div class="container">
        <a class="navbar-brand" href="#">DJ</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Work</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- History & Artist Statement -->
<div class="container-fluid pl-0 pr-0 pt-5 pb-5 background-content">
    <div class="text-top">
        <div class="mb-5 pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{asset('storage/images/that-happened.jpg')}}" alt="That Happened Film Release" class="img-responsive width-100 img-right">
                    </div>
                    <div class="col-sm-6 text-sm-right">
                        <h3 class="raleway-normal font-black text-3rem width-80">
                            SOON FROM DOJUMP
                        </h3>
                        <h3 class="raleway-light font-black text-3rem width-80 mt-5">
                            The first screening of <br>
                            “THAT HAPPENED.” at <br>
                            PAM CUT’s Tomorrow <br>
                            Theater Friday April 26th <br>
                            at 7 pm.
                        </h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <h3 class="raleway-light font-black text-3rem width-100 mt-5">
                            Doors will open at 6:30 with live music and pre-show performances by Do Jump Company members.
                            The film will end with the filming of the final moment of the film in the theater!
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /History & Artist Statement -->

<!-- That Happened Description -->
<div class="container-fluid pl-0 pr-0 pt-5 pb-5 gradiant-lav text-center">
    <h1 class="uppercase raleway-normal font-4em">"That Happened</h1>
    <h4 class="raleway-light font-black text-3rem width-100 mt-3">
        Robin Lane’s feature length theater-circus-danceumentary A story about Do Jump (a hard to describe performance
        ensemble based in Portland Oregon).
        <br>
        From 2020 to the present, THAT HAPPENED was created in real time, virtually
        and in person. It is a physical, comprehensive, poignant and zany, multi genre reflection of the evolving experiences
        of an ensemble of talented circus performers and musicians during this extraordinary time. The film opens with a
        whirlwind journey through “Do Jump” live performances from 1977 through 2019 and ends at the Tomorrow theater.
        A Benefit for Do Jump New Works Fund. Choreo-Directed by Robin Lane.
    </h4>
    <h5 class="raleway-light text-black text-2rem mt-5">
        A Benefit for Do Jump New Works Fund. Choreo-Directed by Robin Lane.
    </h5>
</div>
<!-- /That Happened Description -->


<!-- Footer -->
{{--        <footer class="py-5 bg-dark">--}}
{{--            <div class="container">--}}
{{--                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>--}}
{{--            </div>--}}
{{--        </footer>--}}

<!-- Bootstrap core JavaScript -->
<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>
