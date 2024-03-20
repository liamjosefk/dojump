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
            .above-fold {
                background-image: url("{{asset('storage/images/home-page-background.jpg')}}");
                background-size: cover;
                background-repeat: no-repeat;
                background-height: auto;
                background-position: center;
                height: 100vh;
                padding-top: 20%;
            }
            .background-content {
                background-image: url("{{asset('storage/images/background.jpg')}}");
                background-size: cover;
                background-repeat: no-repeat;
                background-height: auto;
                background-position: center;
            }
            .hand-back {
                background-image: url("{{asset('storage/images/hands.png')}}");
                background-size: contain;
                background-repeat: no-repeat;
                background-height: auto;
                background-position: left;
            }
            .globe-head {
                background-image: url("{{asset('storage/images/globe.png')}}");
                background-size: contain;
                background-repeat: no-repeat;
                background-height: auto;
                background-position: right;
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
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
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
                <div>
                    <a href="{{route('home.that')}}" class="btn btn-lav btn-lg">"THAT HAPPENED"</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid pl-0 pr-0">

            <!-- History & Artist Statement -->
            <div class="container-fluid pl-0 pr-0 background-content">
                <div class="text-top">
                    <div class="row">
                        <div class="hand-back">
                            <div class="row">
                                <div class="col-sm-6 pl-0">
                                    <div class="container pt-5 pb-5">
                                        <div class="text-section pt-5">
                                            <p class="raleway-light text-3rem font-black">

                                                <b> ABOUT ROBIN LANE & DO JUMP</b>
                                                <br>
                                                <br>
                                                DOJUMP has created breath-taking physical theater since 1977, delighting audiences of all ages from Broadway,
                                                NYC to Kodiak, Alaska. Artistic Director Robin Lane’s ground-breaking style combines humor, dance,
                                                theater, circus skills, illusion, visual arts, narrative, and live original music designed to
                                                transport and transform.

                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">

                                    <div class="container pt-5 pb-5">
                                        <div class="text-section pt-5">
                                            <h2 class="raleway-normal font-black text-3rem">
                                                HISTORY
                                            </h2>
                                            <h4 class="raleway-normal font-black text-2rem mt-4">
                                                In 1977 Robin Lane founded DO JUMP. The company is an ensemble of actors, dancers, acrobats, aerialist,
                                                circus performers, musicians, composers, and designers, many of whom have worked together for decades.
                                                Lane has developed countless theatrical performances and civic & private one of a kind events. She also
                                                has pioneered a physical theater curriculum and School in Portland Oregon. Each creative project takes a
                                                fresh approach and works from the inside out to create moving and honest experiences.
                                            </h4>
                                            <h4 class="raleway-normal font-black text-2rem mt-4">
                                                Lane has created and produced 19 evening length performances, many of which have toured through out North America,
                                                including extended runs at the Kennedy Center for the Performing Arts in Washington, D.C., The Geffen Playhouse
                                                in Los Angeles, the Ordway in Minneapolis, and The New Victory in NYC.
                                            </h4>
                                            <h4 class="raleway-normal font-black text-2rem mt-4">
                                                The company has produced countless large-scale spectacles for events including; the the Nike World Masters Games,
                                                the opening of the Portland Hilton Towers, Portland Center Stage’s fifteen anniversary ,the opening of Pacific Northwest
                                                College of Art, ArtQuake, The City of Portland, the opening of Portland Light Rail, Portland Oregon Visitors Association,
                                                the twenty fifth Anniversary of the Museum of Arts and Crafts, the ten year anniversary of Bridgeport Ale, the grand opening
                                                of the new Portland Children’s Museum, South Carolina’s Artisphere, and Toronto’s Winterfest.
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="globe-head">
                            <div class="row">
                                <div class="col-sm-10 col-md-8">
                                    <div class="container pt-5 pb-5">
                                        <div class="text-section pt-5">
                                            <p class="raleway-light text-3rem font-black">
                                                <b> ARTIST STATEMENT </b>
                                            </p>
                                            <h4 class="raleway-regular text-2rem font-black">
                                                I have a problem with reality.
                                            </h4>
                                            <h4 class="raleway-regular text-2rem font-black mt-4">
                                                Something I have been reflecting on a lot is why and how art happens. I think Art is one of the most absolutely necessary and
                                                completely impossible things to do. I have always been plagued with complex visions that won’t leave me alone until I let them
                                                out. Literally hundreds of brilliant people have added their visions and talents to my own to help me do this. The big problem
                                                with visions is, that in your imagination anything is possible, and in the world we are confined by time space ability and
                                                money, not to mention gravity and other issues. SO everything you get to make has to be a bit of a compromise. I have noticed
                                                that it is in the translation of impossible visions into (only slightly less impossible to create) reality, where magic happens.
                                                It is because of reality, that ingenuity, generosity, community and surprises occur.
                                            </h4>
                                            <h4 class="raleway-regular text-2rem font-black mt-4">
                                                It is the process of making art, as much as the art itself which enlivens our communities. And it is important to support this
                                                process, so that we can share the otherwise indescribable landscapes of our inner selves with each other. Everyone has these
                                                landscapes. Artists speak languages that allow all of us to experiences our common humanity together. I love this world, even
                                                in its current state of disrepair. Sometimes the quality of light makes me remember, when I forget this. I can’t always be awake
                                                before dawn, but art can take my breath away anytime. Art allows us to remember what we love, as well as feel our anguish about
                                                what we don’t’, and everything between (which definitely includes laughter).
                                            </h4>
                                            <h4 class="raleway-regular text-2rem font-black mt-4">
                                                The arts have a big job to do in our world. We have to be very creative in this dance between reality and our commitment to travel
                                                and report back from the world of the imagination, the possible, and the heart.
                                            </h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5 pt-5">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{asset('storage/images/that-happened.jpg')}}" alt="That Happened Film Release" class="img-responsive width-80 img-right">
                            </div>
                            <div class="col-sm-6 text-sm-right">
                                <h3 class="raleway-light font-black text-3rem width-80">
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
                    </div>
                </div>
            </div>
            <!-- /History & Artist Statement -->

        </div>

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
