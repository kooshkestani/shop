@extends('Theme2.main.index')

@section('extra-css')


    <link href="/css/mdb2.min.css" rel="stylesheet">
    <link href="/css/algolia.css" rel="stylesheet">
    <style type="text/css">
        .multiple-select-dropdown li [type=checkbox] + label {
            height: 1rem;
        }
    </style>

@endsection


@section('content')


    <div class="container mt-5 pt-3">



        <div class="row pt-4">


            <!-- Content -->
            <div class="col-lg-9">

                <!-- Filter Area -->
                <div class="row">

                    <div class="col-md-4 mt-3">

                        <!-- search result by -->
                        <h1>Search result</h1>
                        <p>{{$products->total()}}  results for {{request()->input('query')}}</p>
                        <!-- /.search result by -->

                    </div>
                    <div class="col-8 col-md-8 text-right">

                        <!-- View Switcher -->
                        <a class="btn btn-blue-grey btn-sm"><i class="fa fa-th mr-2" aria-hidden="true"></i><strong>
                                Grid</strong></a>
                        <a class="btn btn-blue-grey btn-sm"><i class="fa fa-th-list mr-2" aria-hidden="true"></i><strong>
                                List</strong></a>
                        <!-- /.View Switcher -->

                    </div>

                </div>
                <!-- /.Filter Area -->

                <!-- Products Grid -->

                <section class="section pt-4">

                    <!-- Grid row -->
                    <div class="row">
                    @foreach($products as $product)

                        <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4">
                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="/storage/{{$product->image}}" class="img-fluid"
                                             alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1"><strong><a href="{{route('shop.show',$product->slug)}}"
                                                                               class="dark-grey-text">{{$product->name}}</a></strong>
                                        </h5><span class="badge badge-danger mb-2">bestseller</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li><i class="fa fa-star blue-text"></i></li>
                                            <li><i class="fa fa-star blue-text"></i></li>
                                            <li><i class="fa fa-star blue-text"></i></li>
                                            <li><i class="fa fa-star blue-text"></i></li>
                                            <li><i class="fa fa-star blue-text"></i></li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                                <span class="float-left"><strong>{{$product->price}}$</strong></span>
                                                <span class="float-right">

                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                                    class="fa fa-shopping-cart ml-3"></i></a>
                                        </span>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->
                            </div>
                            <!--Grid column-->
                        @endforeach

                    </div>
                    <!--Grid row-->

                    <!--Grid row-->
                    <div class="row justify-content-center mb-4">

                        <!--Pagination -->
                        <nav class="mb-4">
                            <ul class="pagination pagination-circle pg-blue mb-0">

                                <!--First-->
                                <li class="page-item disabled clearfix d-none d-md-block"><a
                                            class="page-link waves-effect waves-effect">First</a></li>

                                <!--Arrow left-->

                                <!--Numbers-->


                            {{ $products->appends(request()->input())->links() }}

                            <!--First-->
                                <li class="page-item clearfix d-none d-md-block"><a
                                            class="page-link waves-effect waves-effect">Last</a></li>

                            </ul>
                        </nav>
                        <!--/Pagination -->

                    </div>
                    <!--Grid row-->
                </section>
                <!-- /.Products Grid -->

            </div>
            <!-- /.Content -->

            <!-- Sidebar -->
        {{--<div class="col-lg-3">--}}

        {{--<div class="">--}}
        {{--<!-- Grid row -->--}}
        {{--<div class="row">--}}
        {{--<div class="col-md-6 col-lg-12 mb-5">--}}
        {{--<!-- Panel -->--}}
        {{--<h3 class="font-weight-bold dark-grey-text"><strong>Order By</strong></h3>--}}
        {{--<div class="divider"></div>--}}

        {{--<p class="blue-text"><a href="{{route('shop.index',['category'=>request()->category,'sort'=>'low_high'])}}">Default</a></p>--}}
        {{--<p class="dark-grey-text"><a href="{{route('shop.index',['category'=>request()->category,'sort'=>'popularity'])}}">Popularity</a></p>--}}
        {{--<p class="dark-grey-text"><a href="{{route('shop.index',['category'=>request()->category,'sort'=>'avg'])}}">Average rating</a></p>--}}
        {{--<p class="dark-grey-text"><a href="{{route('shop.index',['category'=>request()->category,'sort'=>'low_high'])}}">Price: low to high</a></p>--}}
        {{--<p class="dark-grey-text"><a href="{{route('shop.index',['category'=>request()->category,'sort'=>'high_low'])}}">Price: high to low</a></p>--}}
        {{--</div>--}}

        {{--<!-- Filter by category-->--}}
        {{--<div class="col-md-6 col-lg-12 mb-5">--}}
        {{--<h3 class="font-weight-bold dark-grey-text"><strong>Category</strong></h3>--}}
        {{--<div class="divider"></div>--}}

        {{--<!--Radio group-->--}}
        {{--@foreach($categories as $category)--}}
        {{--<div class="form-group ">--}}
        {{--<input class="form-check-input" name="group100" type="radio" id="radio100">--}}
        {{--<label for="radio100" class="form-check-label dark-grey-text"><a href="{{route('shop.index',['category'=>$category->slug])}}">{{$category->name}}</a></label>--}}
        {{--</div>--}}
        {{--@endforeach--}}


        {{--<!--Radio group-->--}}
        {{--</div>--}}
        {{--<!-- /Filter by category-->--}}
        {{--</div>--}}
        {{--<!-- /Grid row -->--}}

        {{--<!-- Grid row -->--}}
        {{--<div class="row">--}}
        {{--<!-- Filter by price  -->--}}
        {{--<div class="col-md-6 col-lg-12 mb-5">--}}
        {{--<h3 class="font-weight-bold dark-grey-text"><strong>Price</strong></h3>--}}
        {{--<div class="divider"></div>--}}

        {{--<form class="range-field mt-3">--}}
        {{--<input id="calculatorSlider" class="no-border" type="range" value="0" min="0" max="30"/>--}}
        {{--</form>--}}

        {{--<!-- Grid row -->--}}
        {{--<div class="row justify-content-center">--}}

        {{--<!-- Grid column -->--}}
        {{--<div class="col-md-6 text-left">--}}
        {{--<p class="dark-grey-text"><strong id="resellerEarnings">0$</strong></p>--}}
        {{--</div>--}}
        {{--<!-- Grid column -->--}}

        {{--<!-- Grid column -->--}}
        {{--<div class="col-md-6 text-right">--}}
        {{--<p class="dark-grey-text"><strong id="clientPrice">319$</strong></p>--}}
        {{--</div>--}}
        {{--<!-- Grid column -->--}}
        {{--</div>--}}
        {{--<!-- Grid row -->--}}

        {{--</div>--}}
        {{--<!-- /Filter by price -->--}}

        {{--<!-- Filter by rating -->--}}
        {{--<div class="col-md-6 col-lg-12 mb-5">--}}
        {{--<h3 class="font-weight-bold dark-grey-text"><strong>Rating</strong></h3>--}}
        {{--<div class="divider"></div>--}}
        {{--<div class="row ml-1">--}}
        {{--<!-- Rating -->--}}
        {{--<ul class="rating mb-0">--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li>--}}
        {{--<p class="ml-3 dark-grey-text"><a>4 and more</a></p>--}}
        {{--</li>--}}
        {{--</ul>--}}

        {{--</div>--}}

        {{--<div class="row ml-1">--}}
        {{--<!-- Rating -->--}}
        {{--<ul class="rating mb-0">--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star grey-text"></i></li>--}}
        {{--<li>--}}
        {{--<p class="ml-3 dark-grey-text"><a>3 - 3,99</a></p>--}}
        {{--</li>--}}
        {{--</ul>--}}

        {{--</div>--}}

        {{--<div class="row ml-1">--}}
        {{--<!-- Rating -->--}}
        {{--<ul class="rating">--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star blue-text"></i></li>--}}
        {{--<li><i class="fa fa-star grey-text"></i></li>--}}
        {{--<li><i class="fa fa-star grey-text"></i></li>--}}
        {{--<li>--}}
        {{--<p class="ml-3 dark-grey-text"><a>3.00 and less</a></p>--}}
        {{--</li>--}}
        {{--</ul>--}}

        {{--</div>--}}
        {{--</div>--}}
        {{--<!-- Filter by rating -->--}}
        {{--</div>--}}
        {{--<!-- /Grid row -->--}}
        {{--</div>--}}

        {{--</div>--}}
        <!-- /.Sidebar -->


        </div>

    </div>

@endsection

@section('extra-js')




@endsection



