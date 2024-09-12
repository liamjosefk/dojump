@extends('layouts.app')

@section('page_title')
    On Stage | DoJump
@endsection

@section('styles')
    <style type="text/css">
        .above-fold-interior {
            background-image: url("{{asset('storage/images/dog.jpg')}}");
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
                                    <p class="marck-script-regular font-white">making art from the inside out</p>
                                    <h1 class="title-text raleway-regular mb-2">
                                        On Stage
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

        <!-- On Stage Shows -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-4">
                    <div class="card shadow mt-4">
                        <div class="card-img-before">
                            <img src="{{asset('storage/images/ahhh.jpg')}}" class="d-block img-fluid w-100" alt="...">
                        </div>
                        <div class="card-header">
                            <h3>AHHH HA!</h3>
                        </div>
                        <div class="card-body">
                            <p>
                                Expect lots of twists and turns along the way with this ageless show, perfect for the whole family! This visually stunning work comprises aerial dance, circus arts, illusion and live music.
                            </p>
                        </div>
                        <div class="card-footer">
                            <div class="row width-100">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-outline-primary btn-100 mt-3" data-toggle="modal" data-target="#videoModal1">
                                        Watch the Trailer
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{route('home.contact')}}" class="btn btn-outline-secondary btn-100 mt-3">
                                        Book the Show
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow mt-4">
                        <div class="card-img-before">
                            <img src="{{asset('storage/images/dizzy-heights.jpg')}}" class="d-block img-fluid w-100" alt="...">
                        </div>
                        <div class="card-header">
                            <h3>At Such a Dizzy Height</h3>
                        </div>
                        <div class="card-body">
                            <p>
                                Inspiration drawn from the paintings of Marc Chagall, DOJUMP takes the audience on a playful journey celebrating life, love, color, shape and spirit.
                            </p>
                            <br>
                        </div>
                        <div class="card-footer">
                            <div class="row width-100">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-outline-primary btn-100 mt-3" data-toggle="modal" data-target="#videoModal2">
                                        Watch the Trailer
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{route('home.contact')}}" class="btn btn-outline-secondary btn-100 mt-3">
                                        Book the Show
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card shadow mt-4">
                        <div class="card-img-before">
                            <img src="{{asset('storage/images/tiger-lilly.jpg')}}" class="d-block img-fluid w-100" alt="...">
                        </div>
                        <div class="card-header">
                            <h3>TIGER LILLY & SUNNY LU</h3>
                        </div>
                        <div class="card-body">
                            <p>
                                Tiger Lilly & Sunny Lu is based on the memoirs of Sunny Lu, a beautiful orange Tabby. See the extraordinary human members of DOJUMP create a one-room feline circus.
                            </p>
                            <br>
                        </div>
                        <div class="card-footer">
                            <div class="row width-100">
                                <div class="col-sm-6">
                                    <a href="#" class="btn btn-outline-primary btn-100 mt-3" data-toggle="modal" data-target="#videoModal3">
                                        Watch the Trailer
                                        <i class="fa fa-chevron-right"></i>
                                    </a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="{{route('home.contact')}}" class="btn btn-outline-secondary btn-100 mt-3">
                                        Book the Show
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /On Stage Shows -->


        <!-- Modals -->
        <div class="modal fade mt-5" id="videoModal1" tabindex="-1" role="dialog" aria-labelledby="video1ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe title="vimeo-player" src="https://player.vimeo.com/video/186474902?h=0fa7a22a22" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade mt-5" id="videoModal2" tabindex="-1" role="dialog" aria-labelledby="video2ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe title="vimeo-player" src="https://player.vimeo.com/video/186475936?h=bc82596ace" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade mt-5" id="videoModal3" tabindex="-1" role="dialog" aria-labelledby="video3ModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <iframe title="vimeo-player" src="https://player.vimeo.com/video/186475613?h=d2e218a15d" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Modals -->


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
