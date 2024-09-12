@extends('layouts.app')

@section('page_title')
    Directing | DoJump
@endsection

@section('styles')
    <style type="text/css">
        .above-fold-interior {
            background-image: url("{{asset('storage/images/home-page-background.jpg')}}");
        }
    </style>
@endsection


@section('scripts)

@endsection


@section('content')
    <div class="container-fluid pl-0 pr-0">

        <!-- Above the Fold -->
        <div class="img-overlay-wrap">
            <div class="above-fold-interior">
                <div class="container text-top">
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="marck-script-regular font-black">making art from the inside out</p>
                            <h1 class="title-text raleway-regular mb-2">
                                Robin Lane & <br>
                                dojump
                            </h1>
                            <p class="line-height-15 mb-2">
                                breathtaking physical theater, nation-wide.
                                robin lane's ground-breaking style combines humor, dance,
                                theater, circus skills, illusions, visual arts, narrative and live
                                original music designed to transport and transform.
                            </p>

                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="1040.152" height="888" viewBox="0 0 1040.152 888">
                <path id="Vector_1580" data-name="Vector 1580" d="M1.651,0c-15.667-78.667,82.9-260.5,178.5-294.5,119.5-42.5,195-55.5,218.5-138.5s-.5-147,69-215,195.724,30,324-125c77.793-94,185.667-100.833,248.5-115l-31.5,829.5Z" transform="translate(1040.152) rotate(180)" fill="#e6cdff" opacity="0.4"/>
            </svg>
        </div>
        <!-- /Above the Fold -->



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
