@extends('layouts.app')

@section('page_title')
    Photo Gallery | DoJump
@endsection

@section('styles')
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style type="text/css">
        .above-fold-interior {
            background-image: url("{{asset('storage/images/trapeze-loop.jpg')}}");
        }
        .modal {
            z-index: 9999 !important;
        }
    </style>
@endsection


@section('scripts')
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
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
                                        Photo Gallery
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

        <!-- Photo Gallery -->
        <div class="container mt-4">
            <div class="row">


                <!-- Image -->
                @foreach($images as $image)
                    <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#lightboxModal1">
                            <img
                                    src="{{ asset('storage/' . $image->image_thumb) }}"
                                    class="w-100 shadow-1-strong rounded mb-4"
                                    alt="Boat on Calm Water"
                            />
                        </a>
                        <!-- Lightbox Modal -->
                        <div class="modal fade" id="lightboxModal1" tabindex="-1" aria-labelledby="lightboxModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <img src="{{ asset('storage/' . $image->image) }}" class="w-100" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-- /Image -->



            </div>
        </div>





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
