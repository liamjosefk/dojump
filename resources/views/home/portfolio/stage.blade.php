@extends('layouts.app')

@section('page_title')
    Stage Portfolio | DoJump
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
                            <div class="col-md-8">
                                <div class="cont-back">
                                    <p class="marck-script-regular text-white">making art from the inside out</p>
                                    <h1 class="title-text raleway-regular mb-2 text-white">
                                        Stage Portfolio
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

                @foreach($projects as $project)
                    <div class="col-sm-4">
                        <div class="card shadow mt-4">
                            <div class="card-img-before">
                                <img src="{{ asset('storage/' . $project->image) }}" class="d-block img-fluid w-100" alt="...">
                            </div>
                            <div class="card-header">
                                <h3>{{$project->title}}</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-lg raleway-light">
                                    {{$project->description}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="row width-100">
                                    <div class="col-sm-6">
                                        <a href="#" class="btn btn-outline-primary btn-100 mt-3" data-toggle="modal" data-target="#videoModal{{$project->id}}">
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

                    <div class="modal fade mt-5" id="videoModal{{$project->id}}" tabindex="-1" role="dialog" aria-labelledby="video1ModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <iframe title="vimeo-player" src="{{$project->link}}" width="100%" height="500px" frameborder="0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
        <!-- /On Stage Shows -->


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
