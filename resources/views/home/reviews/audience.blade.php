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
                                    <p class="marck-script-regular font-white">making art from the inside out</p>
                                    <h1 class="title-text raleway-regular mb-2">
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

                    <!-- Review -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <p class="railway-regular text-lg font-italic">
                                    “… Beautiful, exciting, fun… Episodes of fluid mesmerizing grace (the Ahhh moments) Interspersed with quirky, creative physical comedy (the Ha moments).  And the ellipsis?  I like to think is symbolizes the in undefinable connection between them.”
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Review -->
                    <!-- Review -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <p class="railway-regular text-lg font-italic">
                                    “… Wonderful vivacity and playfulness that capture young and old…one number was absolutely a breathtaking work, almost a religious experience not to be missed. Ahhh HA is the perfect show for you and your loved ones… sure to be a hit.”
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Review -->
                    <!-- Review -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <p class="railway-regular text-lg font-italic">
                                    “At some point in ‘Ahhh HA’ you’re likely to observe that you become unmoored, floating giddily above yourself. And chances are, you make that delightful discovery sooner rather than later.”
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Review -->

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

                    <!-- Review -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <p class="railway-regular text-lg font-italic">
                                    “… the dancers and acrobats of this troupe bring Chagall’s paintings to life. … each of the sequences in Dizzy Height seems to underscore how the artist longed for his Russian homeland from afar, yet still loved his life in Paris. The effect is visual poetry, running thick with melancholy and love.”
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Review -->
                    <!-- Review -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <p class="railway-regular text-lg font-italic">
                                    “What’s great about the company, particularly apparent in this production, is its seamless, elegant merging of various art forms: none stands out over the other, but together the final result is greater than the sum of its parts. This is perhaps one of the company’s best pieces
                                    ever.”
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Review -->
                    <!-- Review -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <p class="railway-regular text-lg font-italic">
                                    “Women hover over a village, a cat loops around a low-flying trapeze, and a couple dances gently. Paying homage to Russian Jewish painter Marc Chagall, Robin Lane’s At Such a Dizzy Height is inspired by the artist’s light- and color-saturated painting. Original music, spoken text, and engaging performances, reveal an artist (Lane) at her peak.”
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Review -->
                    <!-- Review -->
                    <div class="col-sm-6 col-md-4">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <p class="railway-regular text-lg font-italic">
                                    “The show was a huge hit, and I know that the images you created onstage will last a lifetime in the hearts of those who experienced them.”
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Review -->

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

                    <!-- Review -->
                    <div class="col-sm-6">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <p class="railway-regular text-lg font-italic">
                                    “A cat’s world takes on proportions and values of its own. A couch becomes an entire universe, kitty toys dangled from above are looming aliens, and the sunny spot by the window is more coveted than a pot of gold.
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Review -->
                    <!-- Review -->
                    <div class="col-sm-6">
                        <div class="card shadow mt-4">
                            <div class="card-body">
                                <p class="railway-regular text-lg font-italic">
                                    In DOJUMP’s charming new show ‘Tiger Lilly and Sunny Lu: Cirque de Chat,’ company performers really get under the skin — make that the fur — of felines as they romp, wrestle, stretch and cuddle, blending dance, acrobatics and trapeze artistry with an uncanny understanding of cat behavior.”
                                    <br>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- /Review -->

                </div>
            </div>
            <!-- /Tiger Lilly Reviews -->

            <!-- Additional Reviews -->
            <div class="row">

                <!-- Review -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <p class="railway-regular text-lg font-italic">
                                “You notice that everyone sitting behind you is smiling. And everyone across from you is smiling. DOJUMP would call to mind Cirque du Soleil except that it’s so utterly lacking in pretension.”
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Review -->
                <!-- Review -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <p class="railway-regular text-lg font-italic">
                                “You notice that everyone sitting behind you is smiling. And everyone across from you is smiling. DOJUMP would call to mind Cirque du Soleil except that it’s so utterly lacking in pretension.”
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Review -->
                <!-- Review -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <p class="railway-regular text-lg font-italic">
                                “Poignant and beautiful one moment, inventive and silly the next. We marvel, not only at what they do, but how beautifully they do it.”
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Review -->
                <!-- Review -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <p class="railway-regular text-lg font-italic">
                                “…they so easily transform… They talk, dance, leap, run, fly. Are they dancers? Actors? Comics? Acrobats? Vaudevillians? Who Cares? They are Liberators.”
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Review -->
                <!-- Review -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <p class="railway-regular text-lg font-italic">
                                “For 30 years, DOJUMP Has neglected to pay its gravity bill — and audiences can be ever grateful. Saints of both the sublime and the ridiculous, Robin Lane’s troupe embraces the aerial arts, circus frenzy, multimedia sorcery and scintillating propulsive live music to mesmerizing effect.”
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Review -->
                <!-- Review -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <p class="railway-regular text-lg font-italic">
                                “Lane herself is a magnificent presence and, in one sequence, pillow piece, she used every ounce of comic ingenuity as she wrestles to expose and conceal herself.”
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Review -->
                <!-- Review -->
                <div class="col-6 col-sm-4 col-md-3">
                    <div class="card shadow mt-4">
                        <div class="card-body">
                            <p class="railway-regular text-lg font-italic">
                                “…highly creative…there is no doubt DOJUMP furnishes fun in profusion.”
                                <br>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /Review -->

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
