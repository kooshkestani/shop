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
    <style type="text/css">
        .multiple-select-dropdown li [type=checkbox] + label {
            height: 1rem;
        }
    </style>

</head>

<body class="category-v2 hidden-sn white-skin animated">

@include('Theme2.partials.nav')

<!-- Main Container -->
<div class="container mt-5 pt-3">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color mt-5 mb-5">

        <!-- Navbar brand -->
        <a class="font-weight-bold white-text mr-4" href="#">Categories</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1"
                aria-controls="navbarSupportedContent1"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">

                <li class="nav-item dropdown mega-dropdown active">
                    <a class="nav-link dropdown-toggle  no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Laptop</a>
                    <div class="dropdown-menu mega-menu v-2 row z-depth-1 white"
                         aria-labelledby="navbarDropdownMenuLink1">
                        <div class="row mx-md-4 mx-1">
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Brand</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item mb-0" href="#">Sony</a></li>
                                    <li class=""><a class="menu-item" href="#">Lenovo</a></li>
                                    <li class=""><a class="menu-item" href="#">Apple</a></li>
                                    <li class=""><a class="menu-item" href="#">Dell</a></li>
                                    <li class=""><a class="menu-item" href="#">Asus</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Sales</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Laptops Up to 50% Off </a></li>
                                    <li class=""><a class="menu-item" href="#">Laptops under $399</a></li>
                                    <li class=""><a class="menu-item" href="#">Laptops Up to 50% Off</a></li>
                                    <li class=""><a class="menu-item" href="#">Laptops for designers</a></li>
                                    <li class=""><a class="menu-item" href="#">Laptops for developers</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Processor Type</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Intel Core i5 4th Gen.</a></li>
                                    <li class=""><a class="menu-item" href="#">Intel Core i5 5th Gen.</a></li>
                                    <li class=""><a class="menu-item" href="#">Intel Core i5 3th Gen.</a></li>
                                    <li class=""><a class="menu-item" href="#">Intel Core i5 6th Gen.</a></li>
                                    <li class=""><a class="menu-item" href="#">Intel Core i5 7th Gen.</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Customers opinions</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Totam rem aperiam eaque</a></li>
                                    <li class=""><a class="menu-item" href="#">Beatae vitae dicta sun</a></li>
                                    <li class=""><a class="menu-item" href="#">Quae ab illo inventore</a></li>
                                    <li class=""><a class="menu-item" href="#">Nemo enim ipsam</a></li>
                                    <li class=""><a class="menu-item" href="#">Neque porro quisquam est</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Cameras</a>
                    <div class="dropdown-menu mega-menu v-2 row z-depth-1 white"
                         aria-labelledby="navbarDropdownMenuLink1">
                        <div class="row mx-md-4 mx-1">
                            <div class="col-md-12 col-lg-4 sub-menu my-lg-5 mt-5 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Featured</h6>
                                <!--Featured image-->
                                <div class="view overlay mb-3 z-depth-1">
                                    <img src="/storage/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid"
                                         alt="First sample image">
                                    <div class="mask flex-center rgba-white-slight">
                                        <p></p>
                                    </div>
                                </div>
                                <h4 class="mb-2"><a class="news-title-2 pl-0" href="#">Lorem ipsum dolor sit</a></h4>
                            </div>
                            <div class="col-md-6 col-lg-4 sub-menu my-lg-5 my-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Brands</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Canon</a></li>
                                    <li class=""><a class="menu-item" href="#">Nikon</a></li>
                                    <li class=""><a class="menu-item" href="#">Sony</a></li>
                                    <li class=""><a class="menu-item" href="#">GoPro</a></li>
                                    <li class=""><a class="menu-item" href="#">Samsung</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4 sub-menu my-lg-5 my-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Accesories</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Excepteur sint</a></li>
                                    <li class=""><a class="menu-item" href="#">Sunt in culpa</a></li>
                                    <li class=""><a class="menu-item" href="#">Sed ut perspiciatis</a></li>
                                    <li class=""><a class="menu-item" href="#">Mollit anim id est</a></li>
                                    <li class=""><a class="menu-item" href="#">Accusantium doloremque</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">Accesories</a>
                    <div class="dropdown-menu mega-menu v-2 row z-depth-1 white"
                         aria-labelledby="navbarDropdownMenuLink1">
                        <div class="row mx-md-4 mx-1">
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Featured</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item mb-0" href="#">Mouse</a></li>
                                    <li class=""><a class="menu-item" href="#">Printer</a></li>
                                    <li class=""><a class="menu-item" href="#">Laptop bags</a></li>
                                    <li class=""><a class="menu-item" href="#">Software</a></li>
                                    <li class=""><a class="menu-item" href="#">Headphones</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Related</h6>
                                <!--Featured image-->
                                <div class="view overlay mb-3 z-depth-1">
                                    <img src="/storage/Photos/Horizontal/Work/6-col/img%20(43).jpg" class="img-fluid"
                                         alt="First sample image">
                                    <div class="mask flex-center rgba-white-slight">
                                        <p></p>
                                    </div>
                                </div>
                                <h4 class="mb-2"><a class="news-title-2 pl-0" href="#">Lorem ipsum dolor sit</a></h4>
                                <p class="font-small text-uppercase dark-grey-text"><i class="fa fa-clock-o pr-2"
                                                                                       aria-hidden="true"></i>July 17,
                                    2017 / <i class="fa fa-comments-o px-1"
                                              aria-hidden="true"></i> 20</p>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Bestseller</h6>
                                <!--Featured image-->
                                <div class="view overlay mb-3 z-depth-1">
                                    <img src="/storage/Photos/Horizontal/E-commerce/Products/6.jpg" class="img-fluid"
                                         alt="First sample image">
                                    <div class="mask flex-center rgba-white-slight">
                                        <p></p>
                                    </div>
                                </div>
                                <h4 class="mb-2"><a class="news-title-2 pl-0" href="#">Ut labore et dolore magna</a>
                                </h4>
                                <p class="font-small text-uppercase dark-grey-text"><i class="fa fa-clock-o pr-2"
                                                                                       aria-hidden="true"></i>July 16,
                                    2017 / <i class="fa fa-comments-o px-1"
                                              aria-hidden="true"></i> 25</p>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">
                                    Customers opinion</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Totam rem aperiam eaque</a></li>
                                    <li class=""><a class="menu-item" href="#">Beatae vitae dicta sun</a></li>
                                    <li class=""><a class="menu-item" href="#">Quae ab illo inventore</a></li>
                                    <li class=""><a class="menu-item" href="#">Nemo enim ipsam</a></li>
                                    <li class=""><a class="menu-item" href="#">Neque porro quisquam est</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

            </ul>
            <!-- Links -->

            <!-- Search form -->
            <form class="search-form" role="search">
                <div class="form-group md-form my-0 waves-light">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->


    <div class="row pt-4">


        <!-- Content -->
        <div class="col-lg-9">

            <!-- Filter Area -->
            <div class="row">

                <div class="col-md-4 mt-3">

                    <!-- Sort by -->
                    <select class="mdb-select grey-text md-form" multiple>
                        <option value="" disabled selected>Choose your option</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>
                    <label>{{$categoryname}}</label>
                    <button class="btn-save btn btn-primary btn-sm">Save</button>
                    <!-- /.Sort by -->

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
                            {{--<li class="page-item disabled">--}}
                                {{--<a class="page-link waves-effect waves-effect" aria-label="Previous">--}}
                                    {{--<span aria-hidden="true">«</span>--}}
                                    {{--<span class="sr-only">Previous</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

                            <!--Numbers-->


                            {{ $products->appends(request()->input())->links() }}
                            {{--<li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>--}}
                            {{--<li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>--}}
                            {{--<li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>--}}
                            {{--<li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>--}}
                            {{--<li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>--}}

                            <!--Arrow right-->
                            {{--<li class="page-item">--}}
                                {{--<a class="page-link waves-effect waves-effect" aria-label="Next">--}}
                                    {{--<span aria-hidden="true">»</span>--}}
                                    {{--<span class="sr-only">Next</span>--}}
                                {{--</a>--}}
                            {{--</li>--}}

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
        <div class="col-lg-3">

            <div class="">
                <!-- Grid row -->
                <div class="row">
                    <div class="col-md-6 col-lg-12 mb-5">
                        <!-- Panel -->
                        <h3 class="font-weight-bold dark-grey-text"><strong>Order By</strong></h3>
                        <div class="divider"></div>

                        <p class="blue-text"><a href="{{route('shop.index',['category'=>request()->category,'sort'=>'low_high'])}}">Default</a></p>
                        <p class="dark-grey-text"><a href="{{route('shop.index',['category'=>request()->category,'sort'=>'popularity'])}}">Popularity</a></p>
                        <p class="dark-grey-text"><a href="{{route('shop.index',['category'=>request()->category,'sort'=>'avg'])}}">Average rating</a></p>
                        <p class="dark-grey-text"><a href="{{route('shop.index',['category'=>request()->category,'sort'=>'low_high'])}}">Price: low to high</a></p>
                        <p class="dark-grey-text"><a href="{{route('shop.index',['category'=>request()->category,'sort'=>'high_low'])}}">Price: high to low</a></p>
                    </div>

                    <!-- Filter by category-->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h3 class="font-weight-bold dark-grey-text"><strong>Category</strong></h3>
                        <div class="divider"></div>

                        <!--Radio group-->
                        @foreach($categories as $category)
                            <div class="form-group ">
                                <input class="form-check-input" name="group100" type="radio" id="radio100">
                                <label for="radio100" class="form-check-label dark-grey-text"><a href="{{route('shop.index',['category'=>$category->slug])}}">{{$category->name}}</a></label>
                            </div>
                        @endforeach


                        <!--Radio group-->
                    </div>
                    <!-- /Filter by category-->
                </div>
                <!-- /Grid row -->

                <!-- Grid row -->
                <div class="row">
                    <!-- Filter by price  -->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h3 class="font-weight-bold dark-grey-text"><strong>Price</strong></h3>
                        <div class="divider"></div>

                        <form class="range-field mt-3">
                            <input id="calculatorSlider" class="no-border" type="range" value="0" min="0" max="30"/>
                        </form>

                        <!-- Grid row -->
                        <div class="row justify-content-center">

                            <!-- Grid column -->
                            <div class="col-md-6 text-left">
                                <p class="dark-grey-text"><strong id="resellerEarnings">0$</strong></p>
                            </div>
                            <!-- Grid column -->

                            <!-- Grid column -->
                            <div class="col-md-6 text-right">
                                <p class="dark-grey-text"><strong id="clientPrice">319$</strong></p>
                            </div>
                            <!-- Grid column -->
                        </div>
                        <!-- Grid row -->

                    </div>
                    <!-- /Filter by price -->

                    <!-- Filter by rating -->
                    <div class="col-md-6 col-lg-12 mb-5">
                        <h3 class="font-weight-bold dark-grey-text"><strong>Rating</strong></h3>
                        <div class="divider"></div>
                        <div class="row ml-1">
                            <!-- Rating -->
                            <ul class="rating mb-0">
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li>
                                    <p class="ml-3 dark-grey-text"><a>4 and more</a></p>
                                </li>
                            </ul>

                        </div>

                        <div class="row ml-1">
                            <!-- Rating -->
                            <ul class="rating mb-0">
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star grey-text"></i></li>
                                <li>
                                    <p class="ml-3 dark-grey-text"><a>3 - 3,99</a></p>
                                </li>
                            </ul>

                        </div>

                        <div class="row ml-1">
                            <!-- Rating -->
                            <ul class="rating">
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star blue-text"></i></li>
                                <li><i class="fa fa-star grey-text"></i></li>
                                <li><i class="fa fa-star grey-text"></i></li>
                                <li>
                                    <p class="ml-3 dark-grey-text"><a>3.00 and less</a></p>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <!-- Filter by rating -->
                </div>
                <!-- /Grid row -->
            </div>

        </div>
        <!-- /.Sidebar -->


    </div>

</div>
<!-- /.Main Container -->

</main>
@include('Theme2.partials.footer')

@include('Theme2.partials.cart-modal')


<!-- SCRIPTS -->

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
