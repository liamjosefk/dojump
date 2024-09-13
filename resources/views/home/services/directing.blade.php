@extends('layouts.app')

@section('page_title')
    Directing | DoJump
@endsection

@section('styles')
    <style type="text/css">
        .above-fold-interior {
            background-image: url("{{asset('storage/images/trapeze.jpg')}}");
        }
    </style>
@endsection


@section('scripts')

@endsection


@section('content')
    <div class="container-fluid pl-0 pr-0">

        <!-- Above the Fold -->
        <div class="img-overlay-wrap">
            <div class="above-fold-interior">
                <div class="container text-top">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="col-md-6">
                                <div class="cont-back">
                                    <p class="marck-script-regular text-white">making art from the inside out</p>
                                    <h1 class="title-text raleway-regular mb-2 text-white">
                                       Directing
                                    </h1>
                                </div>
                            </div>
                            {{--                            <p class="line-height-15 mb-2">--}}
                            {{--                                breathtaking physical theater, nation-wide.--}}
                            {{--                                robin lane's ground-breaking style combines humor, dance,--}}
                            {{--                                theater, circus skills, illusions, visual arts, narrative and live--}}
                            {{--                                original music designed to transport and transform.--}}
                            {{--                            </p>--}}

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Above the Fold -->


        <!-- Directing Content -->
        <div class="container mt-3">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="text-primary mt-3">
                        Directing your show. Facilitating the creation of your original work.
                    </h2>
                </div>
                <div class="col-sm-8 offset-sm-2">
                    <p class="text-lg raleway-regular">
                        Lane brings the experience of four decades of creating ensemble with companies from diverse performance backgrounds. Her unique directing approach can help you bring your creative process into focus, create a cast deeply connected to each other, to the truth of their material and to communicating that truth while connecting with , and entertaining their audience.The powerful and gradient methods work to propel performers and students past fixed ideas and limitations.
                    </p>
                    <a href="{{route('home.contact')}}" class="btn btn-primary mt-4">
                       <h2> We Can Help</h2>
                    </a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-sm-10 offset-sm-1">
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{asset('storage/images/ahhh.jpg')}}" class="d-block img-fluid w-100" alt="...">
                                </div>
                                <div class="col-sm-8">
                                    <h3>
                                        Mentoring, Workshops, & Design
                                    </h3>
                                    <p class="text-lg raleway-light">
                                        Custom Aerial Dance workshops Choreography, Rigging and Lighting Design. Ensemble building workshops, Original material generating workshops and mentoring.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-8">
                                    <h3 class="text-sm-right">
                                        Directing Your Circus Act
                                    </h3>
                                    <p class="text-sm-right text-lg raleway-light">
                                        Let us help you hone the unique talents and performance qualities that inspire you to shine. We can create or fine tune your choreography, discover and realize your theatrical concept, and enhance your musicality and technique.
                                    </p>
                                </div>
                                <div class="col-sm-4">
                                    <img src="{{asset('storage/images/tiger-lilly.jpg')}}" class="d-block img-fluid w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card shadow mt-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{asset('storage/images/dizzy-heights.jpg')}}" class="d-block img-fluid w-100" alt="...">
                                </div>
                                <div class="col-sm-8">
                                    <h3>
                                        Show Doctor
                                    </h3>
                                    <p class="text-lg raleway-light">
                                        We can help you integrate multi media into your performance, create a scene that is outside your normal area of expertise, add spectacle , circus or aerial work to your show…
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Directing Content -->



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
