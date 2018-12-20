<!--Main Navigation-->
<header>

    <!-- Navbar -->
    {{--<nav class="navbar fixed-top navbar-expand-lg navbar-light white scrolling-navbar">--}}
        {{--<div class="container-fluid">--}}

            {{--<!-- Brand -->--}}
            {{--<a class="navbar-brand waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">--}}
                {{--<strong class="blue-text">MDB</strong>--}}
            {{--</a>--}}

            {{--<!-- Collapse -->--}}
            {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
                    {{--aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
                {{--<span class="navbar-toggler-icon"></span>--}}
            {{--</button>--}}

            {{--<!-- Links -->--}}
            {{--<div class="collapse navbar-collapse" id="navbarSupportedContent">--}}

                {{--<!-- Left -->--}}
                {{--<ul class="navbar-nav mr-auto">--}}
                    {{--<li class="nav-item active">--}}
                        {{--<a class="nav-link waves-effect" href="#">Home--}}
                            {{--<span class="sr-only">(current)</span>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">About--}}
                            {{--MDB</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/getting-started/download/"--}}
                           {{--target="_blank">Free--}}
                            {{--download</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link waves-effect" href="https://mdbootstrap.com/education/bootstrap/" target="_blank">Free--}}
                            {{--tutorials</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}

                {{--<!-- Right -->--}}
                {{--<ul class="navbar-nav nav-flex-icons">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">--}}
                            {{--<i class="fa fa-facebook"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">--}}
                            {{--<i class="fa fa-twitter"></i>--}}
                        {{--</a>--}}
                    {{--</li>--}}
                    {{--<li class="nav-item">--}}
                        {{--<a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link border border-light rounded waves-effect"--}}
                           {{--target="_blank">--}}
                            {{--<i class="fa fa-github mr-2"></i>MDB GitHub--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}

            {{--</div>--}}

        {{--</div>--}}
    {{--</nav>--}}
    <!-- Navbar -->

    <!-- Sidebar -->
    <div class="sidebar-fixed position-fixed text-right "style="right: 0; direction: rtl" >

        <a class="logo-wrapper waves-effect">
            <img src="/storage/logo/DKLogo.svg" class="img-fluid" alt="">
        </a>

        <div class="list-group list-group-flush">

            <a href="{{route('users.profile')}}" class="list-group-item active waves-effect">
                <i class="fa fa-chart-pie ml-3"></i>داشبورد
            </a>
            <a href="{{route('users.profile')}}" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-user ml-3"></i>پروفایل</a>

            <a href="{{route('order.index')}}" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-box-open ml-3"></i>سفارشات</a>
            <a href="" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-tags ml-3"></i>کوپن</a>
            <a href="{{route('users.address')}}" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-map-marked-alt ml-3"></i>آدرس ها</a>
            <a href="{{route('users.comment')}}" class="list-group-item list-group-item-action waves-effect">
                <i class="fa fa-comments ml-3"></i>نظرات</a>
            <a href="{{ route('logout') }}" class="list-group-item list-group-item-action waves-effect"onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                <i class="fa fa-sign-out-alt ml-3"></i>خروج</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

    </div>
    <!-- Sidebar -->

</header>
<!--Main Navigation-->
