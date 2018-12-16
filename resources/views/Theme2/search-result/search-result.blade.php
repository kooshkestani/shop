<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>E-Commerce - MDBootstrap</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="/css/mdb2.min.css" rel="stylesheet">
    <link href="/css/algolia.css" rel="stylesheet">
    <style type="text/css">
        .multiple-select-dropdown li [type=checkbox] + label {
            height: 1rem;
        }
    </style>

</head>

<body class="category-v2 hidden-sn white-skin animated">

@include('Theme2.partials.nav')
@include('Theme2.partials.mega-menu')
<!-- Main Container -->
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
<!-- /.Main Container -->

</main>
@include('Theme2.partials.footer')

@include('Theme2.partials.cart-modal')


<!-- SCRIPTS -->
<!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
<script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
<script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
<script type="text/javascript" src="/js/algolia.js"></script>

<!-- Initialize autocomplete menu -->

<!-- JQuery -->
<script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/js/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="/js/mdb2.min.js"></script>

<script type="text/javascript">
    /* WOW.js init */
    new WOW().init();

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
<script>
    var slider = $("#calculatorSlider");
    var developerBtn = $("#developerBtn");
    var corporateBtn = $("#corporateBtn");
    var privateBtn = $("#privateBtn");
    var reseller = $("#resellerEarnings");
    var client = $("#clientPrice");
    // var percentageBonus = 30; // = 30%
    var license = {
        corpo: {
            active: true,
            price: 319,
        },
        dev: {
            active: false,
            price: 149,
        },
        priv: {
            active: false,
            price: 79,
        }
    }

    function calculate(price, value) {
        client.text((Math.round((price - (value / 100 * price)))) + '$');
        reseller.text((Math.round(((percentageBonus - value) / 100 * price))) + '$')
    }

    function reset(price) {
        slider.val(0);
        client.text(price + '$');
        reseller.text((Math.round((percentageBonus / 100 * price))) + '$');
    }

    developerBtn.on('click', function (e) {
        license.dev.active = true;
        license.corpo.active = false;
        license.priv.active = false;
        reset(license.dev.price)
    });
    privateBtn.on('click', function (e) {
        license.dev.active = false;
        license.corpo.active = false;
        license.priv.active = true;
        reset(license.priv.price);
    });
    corporateBtn.on('click', function (e) {
        license.dev.active = false;
        license.corpo.active = true;
        license.priv.active = false;
        reset(license.corpo.price);
    });
    slider.on("input change", function (e) {
        if (license.priv.active) {
            calculate(license.priv.price, $(this).val());
        } else if (license.corpo.active) {
            calculate(license.corpo.price, $(this).val());
        } else if (license.dev.active) {
            calculate(license.dev.price, $(this).val());
        }
    })
</script>

</body>


</html>
