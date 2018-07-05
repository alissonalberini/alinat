<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('plugins/svg-with-js/css/fa-svg-with-js.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('plugins/select2-4.0.6-rc.1/dist/css/select2.min.css') }}" rel="stylesheet">
        @yield('css')

    </head>
    <body>
        
        <div class="jumbotron text-center" style="margin-bottom:0">
            <h1>Alinat use Bootstrap 4</h1>
            <p>A porra toda é responsiva!</p> 
        </div>


        <!-- Navigation -->
        <nav class="navbar navbar-expand-sm navbar-dark bg-primary">
            
                <a class="navbar-brand" href="#">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <form class="form-inline">
                                <input class="form-control mr-sm-1" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                            </form>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cart <span class="fas fa-shopping-cart"></span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pay">Pay</a>
                        </li>
                    </ul>
                </div>
            
        </nav>

        
        @yield('content')
        

        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
            </div>
            <!-- /.container -->
        </footer>

        
        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('plugins/svg-with-js/js/fontawesome-all.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('plugins/select2-4.0.6-rc.1/dist/js/select2.min.js') }}" type="text/javascript"></script>
    </body>
</html>
