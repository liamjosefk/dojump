@extends('layouts.app')

@section('page_title')
    That Happened | DoJump
@endsection

@section('styles')
    <style type="text/css">
        .above-fold-interior {
            background-image: url("{{asset('storage/images/home-page-background.jpg')}}");
        }
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
@endsection


@section('scripts')

@endsection


@section('content')
    <div class="container-fluid pl-0 pr-0">

        <!-- History & Artist Statement -->
        <div class="container-fluid pl-0 pr-0 pt-5 pb-5 background-content">
            <div class="text-top">
                <h1 class="uppercase raleway-normal font-4em text-primary text-center mt-5">"That Happened"</h1>
                <div class="mb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="{{asset('storage/images/that-happened.jpg')}}" alt="That Happened Film Release" class="img-responsive width-100 img-right mt-4">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('storage/images/elves.jpg')}}" alt="That Happened Film Release" class="img-responsive width-100 img-right mt-4">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('storage/images/ladder.jpg')}}" alt="That Happened Film Release" class="img-responsive width-100 img-right mt-4">
                            </div>
                            <div class="col-sm-6">
                                <img src="{{asset('storage/images/shadow.jpg')}}" alt="That Happened Film Release" class="img-responsive width-100 img-right mt-4">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /History & Artist Statement -->

        <!-- That Happened Description -->
        <div class="container-fluid pl-0 pr-0 pt-5 pb-5 gradiant-lav text-center">

            <h4 class="raleway-bold font-black text-3rem width-100 mt-3">
                Robin Lane’s feature length theater-circus-danceumentary.
            </h4>

            <div class="row mt-3">
                <div class="col-sm-8 offset-sm-2">
                    <img src="{{asset('storage/images/do-jump-cast.jpg')}}" alt="That Happened Film Release" class="img-responsive width-100">
                </div>
            </div>


            <h4 class="raleway-light font-black text-3rem width-100 mt-3">
                Original score created by Joan Szymko.
            </h4>
            <h4 class="raleway-light font-black text-3rem width-100 mt-3">
                The film premiered on April 26, 2024 at PAM CUT's Tomorrow Theater in Portland, Oregon,
                <br>
                with a filming of the live audience used to complete the film.
            </h4>
            <h4 class="raleway-light font-black text-3rem width-100 mt-3">
                Contact us to learn more about Screenings.
                <br>
                Streaming options coming soon.
            </h4>
            <h5 class="raleway-light text-black text-2rem mt-5">
                A Benefit for Do Jump New Works Fund. Choreo-Directed by Robin Lane.
            </h5>
        </div>
        <!-- /That Happened Description -->
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
