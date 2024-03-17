<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Do Jump</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Bootstrap core CSS -->
        <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{asset('css/blog-home.css')}}" rel="stylesheet">
        <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Raleway:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,400;0,900;1,700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            .above-fold {
                background-image: url("{{asset('storage/images/home-page-background.jpg')}}");
                background-size: cover;
                background-repeat: no-repeat;
                background-height: auto;
                background-position: center;
                height: 100vh;
                padding-top: 20%;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#">DJ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Work</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <a href="#" class="btn btn-lav btn-lg">"THAT HAPPENED"</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="above-fold">
                <div class="container">
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
                            <form action="#">
                                @csrf
                                @method("PUT")
                                <div class="white-container mb-2">
                                    <div class="row mt-4">
                                        <div class="col-7">
                                            <div class="form-group">
                                                <label for="email">Register for the mailing list:</label>
                                                <input type="text" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="col-5">
                                            <button class="btn btn-green btn-100 mt-3 mb-2" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-6">

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
            </div>
            <!-- /.container -->
        </footer>

        <!-- Bootstrap core JavaScript -->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    </body>
</html>
