<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        
        @include('layouts.head')
        
        @yield('css')
    </head>
    <body>
        
        @include('layouts.header')
        
        <!-- Navigation -->
        @include('layouts.sidebar')

        <!-- Content -->
        @yield('content')

        <!-- footer -->
        @include('layouts.footer')
        
        <script src="{{ asset('js/script.js') }}"></script>
        
        <!-- Bootstrap core JavaScript -->
<!--        <script src="{{ asset('js/jquery.min.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('plugins/svg-with-js/js/fontawesome-all.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('plugins/select2-4.0.6-rc.1/dist/js/select2.min.js') }}" type="text/javascript"></script>-->
    </body>
</html>


