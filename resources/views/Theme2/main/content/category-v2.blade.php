@extends('Theme2.main.index')

@section('extra-css')
    <link href="{{asset('css/mdb2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/algolia.css')}}" rel="stylesheet">
    {{--<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>--}}

    {{--<script--}}
            {{--src="https://code.jquery.com/jquery-3.3.1.js"--}}
            {{--integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="--}}
            {{--crossorigin="anonymous">--}}

    {{--</script>--}}
    {{--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>--}}

    <style type="text/css">
        .multiple-select-dropdown li [type=checkbox] + label {
            height: 1rem;
        }
    </style>

@endsection
@section('content')
    <!-- Main Container -->
    <div class="container mt-1 pt-3">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark primary-color mt-5 mb-5">


            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent1">

                {{--<script>--}}
                    {{--$(document).ready(function(){--}}
                        {{--$("#myInputorgan").on("keyup", function() {--}}
                            {{--var value = $(this).val().toLowerCase();--}}
                            {{--$(".serachtest").filter(function() {--}}
                                {{--$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)--}}
                            {{--});--}}
                        {{--});--}}


                    {{--});--}}
                {{--</script>--}}
                <!-- Search form -->
                <form class="search-form w-100" role="search">
                    <div class="form-group md-form my-0 waves-light">
                        <input type="text" name="search" id="myInputorgan" class="form-control" placeholder="جستجو">
                    </div>
                </form>
                {{--<h3 align="center">Total Data : <span id="total_records"></span></h3>--}}

            </div>
            <!-- Collapsible content -->

        </nav>
        {{--<!--/.Navbar-->--}}


        <div class="row pt-4" style="direction: ltr" >


            <!-- Content -->
            <div class="col-lg-9">

                <!-- Filter Area -->
                <div class="row">

                    {{--<div class="col-md-4 mt-3">--}}

                        {{--<!-- Sort by -->--}}
                        {{--<select class="mdb-select grey-text md-form" multiple>--}}
                            {{--<option value="" disabled selected>Choose your option</option>--}}
                            {{--<option value="1">Option 1</option>--}}
                            {{--<option value="2">Option 2</option>--}}
                            {{--<option value="3">Option 3</option>--}}
                        {{--</select>--}}
                        {{--<label>{{$categoryname}}</label>--}}
                        {{--<button class="btn-save btn btn-primary btn-sm">Save</button>--}}
                        {{--<!-- /.Sort by -->--}}

                    {{--</div>--}}
                    <div class="col-8 col-md-8 text-right">

                        <!-- View Switcher -->
                        <a class="btn btn-blue-grey btn-sm"><i class="fa fa-th mr-2" aria-hidden="true"></i><strong>
                                مربعی</strong></a>
                        <a class="btn btn-blue-grey btn-sm"><i class="fa fa-th-list mr-2"
                                                               aria-hidden="true"></i><strong>
                                لیست</strong></a>
                        <!-- /.View Switcher -->

                    </div>

                </div>
                <!-- /.Filter Area -->

                <!-- Products Grid -->

                <h1>{{time()}}</h1>
                <section class="section pt-4 container"  id="pjaxproduct" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000">

                    <!-- Grid row -->
                    <div class="row">
                    @foreach($products as $product)

                        <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4 serachtest">
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

                                        <h5 class="card-title mb-1"><strong><a
                                                        href="{{route('shop.show',$product->slug)}}"
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
                                            class="page-link waves-effect waves-effect">قبلی</a></li>

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
                                            class="page-link waves-effect waves-effect">بعدی</a></li>

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
                        <div class="col-md-6 col-lg-12 mb-5" style="direction: rtl">
                            <!-- Panel -->
                            <h3 class="font-weight-bold dark-grey-text"><strong>مرتب کردن</strong></h3>
                            <div class="divider"></div>

                            <p class="blue-text"><a
                                        href="{{route('shop.index',['category'=>request()->category,'sort'=>'low_high'])}}">پیش فرض</a>
                            </p>
                            <p class="dark-grey-text"><a
                                        href="{{route('shop.index',['category'=>request()->category,'sort'=>'popularity'])}}">محبوبیت</a>
                            </p>
                            <p class="dark-grey-text"><a
                                        href="{{route('shop.index',['category'=>request()->category,'sort'=>'avg'])}}">بیشترین امتیاز</a></p>
                            <p class="dark-grey-text"><a
                                        href="{{route('shop.index',['category'=>request()->category,'sort'=>'low_high'])}}">قیمت : کم به زیاد</a></p>
                            <p class="dark-grey-text"><a
                                        href="{{route('shop.index',['category'=>request()->category,'sort'=>'high_low'])}}">قیمت : زیاد به کم</a></p>
                        </div>

                        <!-- Filter by category-->
                        <div class="col-md-6 col-lg-12 mb-5" style="direction: rtl">
                            <h3 class="font-weight-bold dark-grey-text"><strong>دسته بندی</strong></h3>
                            <div class="divider"></div>

                            <!--Radio group-->
                            @foreach($categories as $category)
                                <div class="form-group ">
                                    <input class="form-check-input" name="group100" type="radio" id="radio100">
                                    <label for="radio100" class="form-check-label dark-grey-text"><a
                                                href="{{route('shop.index',['category'=>$category->slug])}}">{{$category->name}}</a></label>
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
                        <div class="col-md-6 col-lg-12 mb-5" style="direction: rtl">
                            <h3 class="font-weight-bold dark-grey-text"><strong>قیمت</strong></h3>
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
                        <div class="col-md-6 col-lg-12 mb-5" style="direction: rtl">
                            <h3 class="font-weight-bold dark-grey-text"><strong>امتیاز</strong></h3>
                            <div class="divider"></div>
                            <div class="row mr-1">
                                <!-- Rating -->
                                <ul class="rating mb-0">
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li>
                                        <p class="mr-3 dark-grey-text"><a>4 ستاره و بیشتر</a></p>
                                    </li>
                                </ul>

                            </div>

                            <div class="row mr-1">
                                <!-- Rating -->
                                <ul class="rating mb-0">
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star grey-text"></i></li>
                                    <li>
                                        <p class="mr-3 dark-grey-text"><a>3 - 3,99</a></p>
                                    </li>
                                </ul>

                            </div>

                            <div class="row mr-1">
                                <!-- Rating -->
                                <ul class="rating">
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star blue-text"></i></li>
                                    <li><i class="fa fa-star grey-text"></i></li>
                                    <li><i class="fa fa-star grey-text"></i></li>
                                    <li>
                                        <p class="mr-3 dark-grey-text"><a>3 ستاره و کمتر</a></p>
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

@endsection

@section('extra-js')

    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script type="text/javascript" src="{{asset('js/algolia.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/pjax.js')}}"></script>

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
    <script type="text/javascript">$(document).pjax('.pagination li a', '#pjax-container');</script>
    {{--<script type="text/javascript">jQuery(function ($) {--}}
            jQuery(document).pjax("#pjaxproduct a", {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#pjaxproduct"});
            jQuery(document).on("submit", "#pjaxproduct form[data-pjax]", function (event) {jQuery.pjax.submit(event, {"push":true,"replace":false,"timeout":1000,"scrollTo":false,"container":"#pjaxproduct"});});</script>
    {{--<script>--}}
        {{--$(document).ready(function(){--}}

            {{--fetch_customer_data();--}}

            {{--function fetch_customer_data(query = '')--}}
            {{--{--}}
                {{--$.ajax({--}}
                    {{--url:"{{ route('shop.action') }}",--}}
                    {{--method:'GET',--}}
                    {{--data:{query:query},--}}
                    {{--dataType:'json',--}}
                    {{--success:function(data)--}}
                    {{--{--}}
                        {{--$('.section').html(data.table_data);--}}
                        {{--$('#total_records').text(data.total_data);--}}
                    {{--}--}}
                {{--})--}}
            {{--}--}}

            {{--$(document).on('keyup', '#search', function(){--}}
                {{--var query = $(this).val();--}}
                {{--fetch_customer_data(query);--}}
            {{--});--}}
        {{--});--}}
    {{--</script>--}}

@endsection
