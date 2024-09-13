@extends('layouts.app')

@section('page_title')
    Corporate Events | DoJump
@endsection

@section('styles')
    <style type="text/css">
        .above-fold-interior {
            background-image: url("{{asset('storage/images/archery.jpg')}}");
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
                            <div class="col-md-8">
                                <div class="cont-back">
                                    <p class="marck-script-regular font-white">making art from the inside out</p>
                                    <h1 class="title-text raleway-regular mb-2">
                                        Corporate / Civic Events
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


        <!-- Corporate / Civic Event Section -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-10 offset-sm-1">
                    <div class="row">
                        <div class="col-4">
                            <img src="{{asset('storage/images/corporate-events.jpg')}}" class="d-block img-fluid w-100" alt="...">
                        </div>
                        <div class="col-8">
                            <h2 class="text-primary">
                                Artistic, Civic, Corporate, & Private Events
                            </h2>

                            <p class="text-lg raleway-regular">
                                DOJUMP specializes in creating unique, site-specific spectacles for your any event—civic or corporate celebrations, parties, and more.
                            </p>
                            <p class="text-lg raleway-regular">
                                DOJUMP creates one-of-a kind experiences that celebrate the spirit and theme of the occasion. The DOJUMP ensemble includes “actorbats,” aerialists, musicians, stilt walkers, jugglers, and dancers. We are proud of our adaptability: our performances are carefully choreographed to fit the site and budget of your event, and are intended to delight and entertain audiences of all ages.
                            </p>
                            <p class="text-lg raleway-regular">
                                DOJUMP has designed and presented large-scale spectacles for events such as the Nike World Masters Games, the opening of Portland’s west side light rail, South Carolina’s Artisphere, and Toronto’s Winterfest. DOJUMP has also fascinated audiences at corporate and civic events like the Rose Festival, the opening of the Portland Children’s Museum, and numerous other gala events.
                            </p>
                            <p class="text-lg text-center raleway-regular">
                                <em>
                                    "They so easily transform — they talk, dance, leap, run, fly. Are they dancers? Actors? Comics? Acrobats? Vaudevillians? Who Cares? They are Liberators.” --<small>The Oregonian</small>
                                </em>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Corporate / Civic Event Section -->

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
