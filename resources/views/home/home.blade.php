@extends('layouts.app')

@section('page_title')
    DoJump
@endsection

@section('styles')
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
        @media screen and (min-width: 800px) {
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
        }

        .svg-back {
            height: 100vh;
        }

        .happening-image {
            background-image: url('{{asset('storage/images/that-happened.jpg')}}');
        }
    </style>
@endsection


@section('scripts')

@endsection


@section('content')
    <div class="container-fluid pl-0 pr-0">

        <!-- Above the Fold -->
        <div class="img-overlay-wrap">
            <div class="above-fold">
                <div class="container text-top">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="marck-script-regular font-black">making art from the inside out</p>
                            <h1 class="title-text raleway-regular mb-2">
                                Robin Lane & <br>
                                dojump
                            </h1>
                            <p class="line-height-15 mb-2">
                                breathtaking physical theater, nation-wide.
                                robin lane's ground-breaking style combines humor, dance,
                                theater, circus skills, illusions, visual arts, narrative and live
                                original music designed to transport and transform.
                            </p>
                            <form action="{{route('lead.subscribe')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <div class="white-container mb-2">
                                    <div class="row mt-4">
                                        <div class="col-sm-7">
                                            <div class="form-group">
                                                <label for="email">Register for the mailing list:</label>
                                                <input type="text" class="form-control" name="email" placeholder="email@email.com" required>
                                            </div>
                                        </div>
                                        <div class="col-sm-5">
                                            <label for="submit"></label>
                                            <button class="btn btn-primary btn-100 mt-1 mb-2" type="submit">Submit</button>
                                        </div>
                                    </div>
                                    @if (session('success'))
                                        <p class="text-primary">{{ session('success') }}</p>
                                    @endif

                                    @if (session('error'))
                                        <p class="text-primary">{{ session('error') }}</p>
                                    @endif

                                    @if (session('info'))
                                        <p class="text-primary">{{ session('info') }}</p>
                                    @endif

                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden-xs">
                <svg xmlns="http://www.w3.org/2000/svg" width="1040.152" height="888" viewBox="0 0 1040.152 888">
                    <path id="Vector_1580" data-name="Vector 1580" d="M1.651,0c-15.667-78.667,82.9-260.5,178.5-294.5,119.5-42.5,195-55.5,218.5-138.5s-.5-147,69-215,195.724,30,324-125c77.793-94,185.667-100.833,248.5-115l-31.5,829.5Z" transform="translate(1040.152) rotate(180)" fill="#e6cdff" opacity="0.4"/>
                </svg>
            </div>
        </div>
        <!-- /Above the Fold -->

        <!-- New from DoJump -->
        <div class="">
            <div class="happening-image">
                <div class="happening-text">
                    <div class="row">
                        <div class="col-sm-5">
                            <img src="{{asset('storage/images/that-happened-poster.jpg')}}" alt="That Happened Film Release" class="">
                        </div>
                        <div class="col-sm-6">
                            <h2>
                                NEW
                                FROM
                                DOJUMP
                            </h2>
                            <p>
                                Do Jumps first feature film "THAT HAPPENED"
                                <br>
                                has been selected for
                                <br>
                                THE PORTLAND FILM FESTIVAL
                                <br>
                                in October!
                            </p>
                            <div class="row mt-4">
                                <div class="col-sm-6 offset-sm-3">
                                    <a href="{{route('home.that')}}" class="btn btn-outline-primary btn-100">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /New from DoJump -->

        <!-- Carousel -->
        <div id="carouselExampleAutoplaying" class="carousel slide carousel-fade width-100" data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{asset('storage/images/courtney.jpg')}}" class="d-block img-fluid w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('storage/images/dog.jpg')}}" class="d-block img-fluid w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{asset('storage/images/flip.jpg')}}" class="d-block img-fluid w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- /Carousel -->

        <!-- History & Artist Statement -->
        <div class="container-fluid pl-0 pr-0 background-content">
            <div class="text-top">
                <div class="row">
                    <div class="hand-back">
                        <div class="row">
                            <div class="col-sm-6 pl-0">
                                <div class="container pt-5 pb-5">
                                    <div class="text-section pt-5">
                                        <p class="raleway-regular text-3rem font-black">

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
                <!-- Videos -->
                <div class="row mt-5">
                    <div class="col-sm-6">
                        <iframe src="https://player.vimeo.com/video/186475936?h=bc82596ace" width="100%" height="480" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-sm-6">
                        <iframe src="https://player.vimeo.com/video/186474902?h=0fa7a22a22" width="100%" height="480" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <!-- /Videos -->
            </div>
        </div>
        <!-- /History & Artist Statement -->



        <!-- Email -->
       <div class="container">
           <div class="row text-center mb-5">
               <div class="col-12">
                   <h3 class="raleway-bold text-black text-3rem mt-5">
                       <a href="mailto:dojump@dojump.org">dojump@dojump.org</a>
                   </h3>
               </div>
           </div>
       </div>
        <!-- /Email -->

    </div>
@endsection

