<!--Navigation-->

<header>
    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light scrolling-navbar white">
        <div class="container">
            <!-- SideNav slide-out button -->
            <div class="float-left mr-2">
                <a href="#" data-activates="slide-out" class="button-collapse">
                    <i class="fa fa-bars"></i>
                </a>
            </div>
            <a class="navbar-brand font-weight-bold" href="{{ url('/') }}">
                <strong>{{ config('app.name', 'Shop') }}</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
                    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                <ul class="navbar-nav mr-auto">
                    <!-- All product-->
                    <li class="nav-item ">
                        <a class="nav-link dark-grey-text font-weight-bold" href="{{route('cart.index')}}"
                           data-toggle="modal" data-target="#cart-modal-ex">
                            @if(Cart::instance('default')->count()>0)
                                <span class="badge danger-color">{{Cart::count()}}</span>
                            @endif
                            <i class="fa fa-shopping-cart blue-text" aria-hidden="true"></i>
                            <span class="clearfix d-none d-sm-inline-block">سبد خرید</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link dark-grey-text font-weight-bold" href="{{route('shop.index')}}">


                            <i class="fa fa-shopping-bag blue-text" aria-hidden="true"></i>
                            <span class="clearfix d-none d-sm-inline-block">محصولات</span>
                        </a>
                    </li>
                    <!-- Login Section -->
                    <li class="nav-item dropdown ml-3">
                        <a class="nav-link dropdown-toggle waves-effect waves-light dark-grey-text font-weight-bold"
                           id="navbarDropdownMenuLink-4"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-user blue-text"></i> حساب کاربری </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-cyan text-center"
                             aria-labelledby="navbarDropdownMenuLink-4">
                             @guest
                             
                             <a class="dropdown-item waves-effect waves-light"
                             href="{{ route('login') }}">{{ __('auth.login') }}</a>
                             
                             @if (Route::has('register'))
                             <a class="dropdown-item waves-effect waves-light"
                             href="{{ route('register') }}">{{ __('auth.register') }}</a>
                             @endif
                             @else
                                <a class="dropdown-item waves-effect waves-light" href="{{route('order.index')}}">{{__('auth.my account')}}</a>
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <a class="dropdown-item waves-effect waves-light" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                {{ __('auth.logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            @endguest

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /.Navbar -->

</header>
<!-- /.Navigation -->
