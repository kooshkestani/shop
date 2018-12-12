<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <link rel="stylesheet" href="{{asset('font-awesome/4.7.0/css/font-awesome.min.css')}}">


    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">


@yield('extra-css')


    <!-- Styles -->
</head>
<body>
<div id="app">
    @include('Theme2.main.partials.nav')
    @yield('mega-menu')
    <main class="py-4 mt-5">
        @yield('content')
    </main>
</div>
@include('Theme2.main.partials.footer')
@include('Theme2.main.partials.cart-modal')
</body>
<!-- Scripts -->

@yield('extra-js')

<!-- JQuery -->
<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>

</html>
