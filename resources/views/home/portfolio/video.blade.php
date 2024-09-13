@extends('layouts.app')

@section('page_title')
    Video Portfolio | DoJump
@endsection

@section('styles')
    <style type="text/css">
        .above-fold-interior {
            background-image: url("{{asset('storage/images/silks.jpg')}}");
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
                                        Video Portfolio
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


        <!-- Videos -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/515824583?h=ca25221293" width="100%" height="360" frameborder="0"    allowfullscreen></iframe>
                </div>
                <div class="col-sm-6">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/516459392?h=74ead5a215" width="100%" height="360" frameborder="0"    allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/186475936?h=bc82596ace" width="100%" height="360" frameborder="0"    allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/186475613?h=d2e218a15d" width="100%" height="360" frameborder="0"    allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/186474903?h=ffece9ae16" width="100%" height="360" frameborder="0"    allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/186474902?h=0fa7a22a22" width="100%" height="360" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/186474900?h=3f10428d51" width="100%" height="360" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/186474838?h=2409935a45" width="100%" height="360" frameborder="0" allowfullscreen></iframe>
                </div>
                <div class="col-sm-4">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/167807246?h=0542cd7356" width="100%" height="360" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <!-- /Videos -->



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
