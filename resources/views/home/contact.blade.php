@extends('layouts.app')

@section('page_title')
    Contact | DoJump
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
                                    <p class="marck-script-regular text-white">making art from the inside out</p>
                                    <h1 class="title-text raleway-regular mb-2 text-white">
                                        Contact
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


        <!-- Contact Form -->
        <div class="container mt-5">
            <h2 class="text-primary text-center">We would love to hear from you!</h2>
            <form action="{{route('message.store')}}" method="post">
                @csrf
                @method('POST')

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <label for="name" class="mt-3">Name <span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="John Smith">
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <label for="email" class="mt-3">Email <span class="text-red">*</span></label>
                            <input type="text" class="form-control" name="email" placeholder="email@email.com">
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <label for="phone" class="mt-3">Phone</label>
                            <input type="text" class="form-control" name="phone" placeholder="503-555-5555">
                        </div>
                        <div class="col-sm-12">
                            <label for="subject" class="mt-3">Subject</label>
                            <input type="text" class="form-control" name="subject">
                        </div>
                        <div class="col-sm-12">
                            <label for="message" class="mt-3">Message <span class="text-red">*</span></label>
                            <textarea name="message" id="message" cols="30" rows="10" class="form-control"></textarea>
                        </div>
                        <div class="col-12 col-sm-6 offset-sm-3 col-md-3 offset-md-9">
                            <button class="btn btn-primary mt-4 btn-100" type="submit">Submit</button>
                            <div class="text-center text-red">
                                @if(session()->has('message-sent'))
                                    {{session('message-sent')}}
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
        <!-- /Contact Form -->


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
