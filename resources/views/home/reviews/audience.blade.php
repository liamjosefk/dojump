@extends('layouts.app')

@section('page_title')
    Audience Reviews | DoJump
@endsection

@section('styles')
    <style type="text/css">
        .above-fold-interior {
            background-image: url("{{asset('storage/images/courtney.jpg')}}");
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
                                    <p class="marck-script-regular text-white">making art from the inside out</p>
                                    <h1 class="title-text raleway-regular mb-2 text-white">
                                        Audience Reviews
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

        <!-- Audience Reviews -->
        <div class="container mt-5">

            <!-- Ahhh Ha Reviews -->
            <div class="audience-reviews mb-5">
                <div class="row">
                    <div class="col-sm-10 offset-sm-1">
                        <div class="review-image">
                            <img src="{{ asset('storage/images/reviews-audience-ahhh.jpg') }}" class="d-block img-fluid w-100" alt="...">
                            <div class="review-text">
                                <h2>Praise for Ahhh Ha</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                @foreach($ahh_reviews as $review)
                    <!-- Review -->
                        <div class="col-sm-6 col-md-4">
                            <div class="card shadow mt-4">
                                <div class="card-body">
                                    <p class="railway-regular text-lg font-italic">
                                        “{{$review->content}}”
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /Review -->
                @endforeach



                </div>
            </div>
            <!-- /Ahhh Ha Reviews -->

            <!-- Dizzy Heights Reviews -->
            <div class="audience-reviews mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-10 offset-sm-1">
                        <div class="review-image">
                            <img src="{{ asset('storage/images/reviews-audience-dizzy-heights.jpg') }}" class="d-block img-fluid w-100" alt="...">
                            <div class="review-text">
                                <h2>Praise for At Such Dizzy Height</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                @foreach($dizzy_reviews as $review)
                    <!-- Review -->
                        <div class="col-sm-6 col-md-4">
                            <div class="card shadow mt-4">
                                <div class="card-body">
                                    <p class="railway-regular text-lg font-italic">
                                        “{{$review->content}}”
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /Review -->
                @endforeach


                </div>
            </div>
            <!-- /Dizzy Heights Reviews -->

            <!-- Tiger Lilly Reviews -->
            <div class="audience-reviews mt-5 mb-5">
                <div class="row">
                    <div class="col-sm-10 offset-sm-1">
                        <div class="review-image">
                            <img src="{{ asset('storage/images/reviews-audience-tiger-lilly.jpg') }}" class="d-block img-fluid w-100" alt="...">
                            <div class="review-text">
                                <h2>Praise for Tiger Lily and Sunny Lu</h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">

                @foreach($tiger_reviews as $review)
                    <!-- Review -->
                        <div class="col-sm-6">
                            <div class="card shadow mt-4">
                                <div class="card-body">
                                    <p class="railway-regular text-lg font-italic">
                                        “{{$review->content}}”
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /Review -->
                @endforeach




            <!-- Additional Reviews -->
            <div class="row">

                @foreach($gen_reviews as $review)
                    <!-- Review -->
                        <div class="col-6 col-sm-4 col-md-3">
                            <div class="card shadow mt-4">
                                <div class="card-body">
                                    <p class="railway-regular text-lg font-italic">
                                        “{{$review->content}}”
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /Review -->
                @endforeach


            </div>
            <!-- /Additional Reviews -->


        </div>
        <!-- /Audience Reviews -->


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
