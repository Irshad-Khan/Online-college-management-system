<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>Online Admission System</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Themesbrand" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App Icons -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500|Quattrocento+Sans:400,700" rel="stylesheet" />

        <!--Mobirise Icons-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/mobirise.css') }}" />

        <!-- Magnific-popup -->
        <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

        <!--Material Design Icons-->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/materialdesignicons.min.css') }}" />

        <!-- Bootstrap core CSS -->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    </head>

    <body data-spy="scroll" data-target="#navbar-example" data-offset="20">

        <!--START NAVBAR-->
        <nav id="navbar-example" class="navbar navbar-expand-lg navbar-inverse navbar-toggleable-md fixed-top sticky navbar-custom">
            <div class="container">
                <a class="navbar-brand logo" href="#">
                    <span class="logo-text">Online Admission System</span>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarCollapse">
                    <ul class="navbar-nav ml-auto" id="mySidenav">
                        <li class="nav-item">
                            <a href="#home" class="nav-link active">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#features" class="nav-link">Programs</a>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#shots" class="nav-link">Gallary</a>
                        </li> --}}
                        <li class="nav-item">
                            <a href="#pricing" class="nav-link">Admissions</a>
                        </li>
                        <li class="nav-item">
                            <a href="#team" class="nav-link">Team</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav-link">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link btn btn-custom">Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link btn btn-custom">Student registration</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--END NAVBAR-->

        @yield('content')

        <!--start footer-->
        <footer class="footer bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="float-right pull-none">
                            <ul class="list-inline social">
                                <li class="list-inline-item"><a href="#"><i class="mdi mdi-twitter"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="mdi mdi-dribbble"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="mdi mdi-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="mdi mdi-google"></i></a></li>
                                <li class="list-inline-item"><a href=""><i class="mdi mdi-facebook"></i></a></li>
                            </ul>
                        </div>
                        <div class="pull-none">
                            <p class="copy-rights">2017 - 2020 © Admiria. All Rights Reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--END FOOTER-->

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <!-- Sticky Header -->
        <script src="{{ asset('js/jquery.sticky.js') }}"></script>
        <!-- Jquery easing -->
        <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <!--common script for all pages-->
        <script src="{{ asset('js/jquery.app.js') }}"></script>
    </body>

</html>