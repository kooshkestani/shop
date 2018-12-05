<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    
    <link rel="stylesheet" href="{{asset('font-awesome/4.7.0/css/font-awesome.min.css')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <link href="{{asset('css/compiled-4.5.15.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/mdb2.min.css')}}" rel="stylesheet">

    <!-- Styles -->
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
</head>
<body>
    <div id="app">
@include('Theme2.partials.nav')
        <main class="py-4 mt-5">
            @yield('content')
        </main>
    </div>
@include('Theme2.partials.cart-modal')
</body>
<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</html>
