<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}  </title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    {{--<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.8/css/mdb.min.css" rel="stylesheet">--}}

    {{--<link href="{{asset('css/compiled-4.5.15.min.css')}}" rel="stylesheet">--}}
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/rtl-user.css')}}" rel="stylesheet">

    @yield('css-extra')
</head>
<style>
    .pt-3-half {
        padding-top: 1.4rem;
    }
</style>
<body class="grey lighten-3">

@include('Theme2.my-profile.partials.nav')
<!--Main layout-->
<main class="pt-5 mx-5">
@yield('content')
</main>
<!--Main layout-->

@include('Theme2.my-profile.partials.footer')
@yield('modal')
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="{{asset('js/mdb.min.js')}}"></script>
{{--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.8/js/mdb.min.js"></script>--}}

<!-- Initializations -->

@yield('extra-js')

</body>

</html>