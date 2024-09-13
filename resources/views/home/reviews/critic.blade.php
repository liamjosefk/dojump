@extends('layouts.app')

@section('page_title')
    Critic Reviews | DoJump
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
                                    <p class="marck-script-regular text-white">making art from the inside out</p>
                                    <h1 class="title-text raleway-regular mb-2 text-white">
                                        Critic Reviews
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


        <!-- QA Video -->
        <div class="container">
            <div class="mt-5">
                <div class="col-sm-8 offset-sm-2">
                    <iframe width="100%" height="360" src="https://www.youtube.com/embed/ppp6d-TR4RM?si=bzHmSmuIkg2fYfqK" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- /QA Video -->


        <!-- Critic Reviews -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card shadow mt-4">
                        <div class="card-img-before">
                            <img src="{{asset('storage/images/review-ahhh.jpg')}}" class="d-block img-fluid w-100" alt="...">
                        </div>
                        <div class="card-header">
                            <h3>The NY Times</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-lg raleway-light">
                                Take Oohs and Ahs and Mix with Giggles
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="row width-100">
                                <div class="col-sm-6">
                                    <a href="https://www.nytimes.com/2000/04/20/theater/theater-review-take-oohs-and-ahs-and-mix-with-giggles.html" target="_blank" class="btn btn-outline-primary btn-100 mt-3">
                                        Read Review
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{route('home.contact')}}" class="btn btn-outline-secondary btn-100 mt-3">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow mt-4">
                        <div class="card-img-before">
                            <img src="{{asset('storage/images/review-trapeze.jpg')}}" class="d-block img-fluid w-100" alt="...">
                        </div>
                        <div class="card-header">
                            <h3>Oregon Live</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-lg raleway-light">
                                Portland's Do Jump! pursues happiness with lightness
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="row width-100">
                                <div class="col-sm-6">
                                    <a href="https://www.oregonlive.com/performance/2010/12/review_dojump_pursues_happines.html" target="_blank" class="btn btn-outline-primary btn-100 mt-3">
                                        Read Review
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{route('home.contact')}}" class="btn btn-outline-secondary btn-100 mt-3">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow mt-4">
                        <div class="card-img-before">
                            <img src="{{asset('storage/images/review-tiger-lilly.jpg')}}" class="d-block img-fluid w-100" alt="...">
                        </div>
                        <div class="card-header">
                            <h3>Willamette Week</h3>
                        </div>
                        <div class="card-body">
                            <p class="text-lg raleway-light">
                                Do Jump! creates catnip out of physical theater.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="row width-100">
                                <div class="col-sm-6">
                                    <a href="https://www.wweek.com/portland/article-11413-i-tiger-lilly-and-sunny-lu-i-do-jump.html" target="_blank" class="btn btn-outline-primary btn-100 mt-3">
                                        Read Review
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{route('home.contact')}}" class="btn btn-outline-secondary btn-100 mt-3">
                                        Contact Us
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Critic Reviews -->



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
