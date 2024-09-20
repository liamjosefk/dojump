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

                @foreach($reviews as $review)
                    <div class="col-sm-4">
                        <div class="card shadow mt-4">
                            <div class="card-img-before">
                                <img src="{{asset('storage/' . $review->image)}}" class="d-block img-fluid w-100" alt="...">
                            </div>
                            <div class="card-header">
                                <h3>{{$review->author}}</h3>
                            </div>
                            <div class="card-body">
                                <p class="text-lg raleway-light">
                                    {{$review->title}}
                                </p>
                            </div>
                            <div class="card-footer">
                                <div class="row width-100">
                                    <div class="col-sm-6">
                                        {{--                                    <a href="https://www.nytimes.com/2000/04/20/theater/theater-review-take-oohs-and-ahs-and-mix-with-giggles.html" target="_blank" class="btn btn-outline-primary btn-100 mt-3">--}}
                                        {{--                                        Read Review--}}
                                        {{--                                        <i class="fa fa-chevron-right"></i>--}}
                                        {{--                                    </a>--}}
                                        <a href="#" data-toggle="modal" data-target="#review{{$review->id}}" class="btn btn-outline-primary btn-100 mt-3">
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

                        <div class="modal fade mt-5" id="review{{$review->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <form action="{{ route('admin.user.store') }}" method="POST">
                                    @csrf
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h3 class="modal-title" id="exampleModalLabel">{{$review->author}}</h3>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <h3 class="text-gray-500">{{$review->title}}</h3>
                                            <h5 class="text-gray-300">
                                                {!! $review->content !!}
                                            </h5>
                                        </div>
                                        <div class="modal-footer pb-5">
                                            <div class="row width-100">
                                                <div class="col-6">
                                                    <button class="btn btn-secondary btn-100" type="button" data-dismiss="modal">Close</button>
                                                </div>
                                                <div class="col-6">
                                                    <a href="{{$review->link}}" target="_blank" class="btn btn-primary btn-100">
                                                        Read at {{$review->author}}
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach


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
