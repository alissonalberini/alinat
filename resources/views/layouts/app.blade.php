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

        <link href="{{ asset('css/style.css') }}" rel="stylesheet">

        @yield('css')

    </head>
    <body>
        
        <div class="jumbotron" style="margin-bottom:0px; padding: 15px; background-color: purple;">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
                    <h1>
                        <a title="Alinat - Presentes criativos" class="logo" href="https://www.alinat.com.br/">
                        <img src="https://www.funstock.com.br/skin/frontend/facilestore/default/images/logo.png" alt="Alinat - Presentes criativos" title="Alinat - Presentes criativos" class="img-responsive">
                    </a>
                    </h1>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-7">
                    <form class="form-inline" action="/" method="get" style="">
                        <input class="form-control mr-sm-1" type="search" placeholder="Pesquisar" name="search" aria-label="Pesquisar" style="width: 80%">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>                
                </div>
                <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 pull-left">
                    <a style="color: white;" href="/cart"> 
                        Cart 
                        <span class="fas fa-shopping-cart"></span>
                        <span class="badge badge-light">
                            @if(Session::get('cart.itens'))
                                {{ count(Session::get('cart.itens')) }}
                            @endif
                        </span>
                    </a>
                </div>
            </div>
        </div>
        
        @include('layouts.carrousel')

        @include('layouts.navbar')

        @yield('content')

        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Alinat 2018</p>
            </div>
            <!-- /.container -->
        </footer>


        <!-- Bootstrap core JavaScript -->
        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('plugins/svg-with-js/js/fontawesome-all.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('plugins/select2-4.0.6-rc.1/dist/js/select2.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/script.js') }}"></script>

        @yield('scripts')

    </body>
</html>
