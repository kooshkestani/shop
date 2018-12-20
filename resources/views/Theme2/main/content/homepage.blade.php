@extends('Theme2.main.index')
@section('extra-css')

    <link href="{{asset('css/mdb2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/algolia.css')}}" rel="stylesheet">


@endsection

@section('mega-menu')
@include('Theme2.main.partials.mega-menu',['allCategory'=>$allCategories])
@endsection

@section('content')

    <!-- /.Main Container -->
    <div class="container">
        <div class="row pt-4">
            <!-- Content -->
            <div class="col-lg-12">

                <!-- Products Grid -->
                <section class="section pt-4">

                    <!-- Grid row -->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-8 col-md-12 mb-3 pb-lg-2">
                            <!--Image -->
                            <div class="view zoom z-depth-1">

                                <img src="/storage/Photos/Others/product1.jpg" class="img-fluid" alt="sample image">
                                <div class="mask rgba-white-light">
                                    <div class="dark-grey-text d-flex align-items-center pt-4 mr-3 pr-3">
                                        <div>
                                            <a><span class="badge badge-danger">فروش ویژه</span></a>
                                            <h2 class="card-title font-weight-bold pt-2"><strong>یلدای شگفت انگیز</strong>
                                            </h2>
                                            <p class="">فروش بهترین محصولات جانبی در دیجی کالا. </p>
                                            <a class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block">بیشتر بدانید</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-4 col-md-12 mb-4">

                            <!-- Section: Categories -->
                            <section class="section section-nav">
                                {{-- <ul class="list-group z-depth-1">

                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small"><i class="fa fa-laptop dark-grey-text mr-2"
                                                                                aria-hidden="true"></i> Laptops</a>
                                        <a href="#"></a><span class="badge badge-danger badge-pill">43</span></a>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small"><i
                                                    class="fa fa-mobile-phone dark-grey-text mr-3" aria-hidden="true"></i>
                                            Smartphone</a>
                                        <span class="badge badge-danger badge-pill">32</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small"><i class="fa fa-tablet dark-grey-text mr-3"
                                                                                aria-hidden="true"></i> Tablet</a>
                                        <span class="badge badge-danger badge-pill">18</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small"><i class="fa fa-headphones dark-grey-text mr-3"
                                                                                aria-hidden="true"></i>Heahphones</a>
                                        <span class="badge badge-danger badge-pill">37</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small"><i
                                                    class="fa fa-camera-retro dark-grey-text mr-3" aria-hidden="true"></i>Camera</a>
                                        <span class="badge badge-danger badge-pill">15</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small"><i class="fa fa-suitcase dark-grey-text mr-3"
                                                                                aria-hidden="true"></i>Accesories</a>
                                        <span class="badge badge-danger badge-pill">64</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small"><i class="fa fa-television dark-grey-text mr-3"
                                                                                aria-hidden="true"></i>TV</a>
                                        <span class="badge badge-danger badge-pill">2</span>
                                    </li>
                                </ul>  --}}
                                @foreach ($allCategories as $category)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a class="dark-grey-text font-small">{{$category->name}}</a>
                                        <a href="#"></a><span
                                                class="badge badge-danger badge-pill">{{$category->products()->get()->count()}}</span></a>
                                    </li>
                                @endforeach
                            </section>
                            <!-- Section: Categories -->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <!-- Section small products -->
                    <section>

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-12">

                                <!-- Grid row -->
                                <div class="row">
                                @foreach($product as $product)

                                    <!--Grid column-->
                                        <div class="col-lg-6 col-md-6 mb-4">

                                            <!--Card-->
                                            <div class="card card-ecommerce">
                                                <!-- Grid row -->
                                                <div class="row">
                                                    <!--Grid column-->
                                                    <div class="col-6 d-flex align-items-center">
                                                        <!--Card image-->
                                                        <div class="view overlay">
                                                            <img src="/storage/{{$product->image}}"
                                                                 class="img-fluid" alt="PIC">
                                                            <a href="{{route('shop.show',$product->slug)}}">
                                                                <div class="mask rgba-white-slight"></div>
                                                            </a>
                                                        </div>
                                                        <!--Card image-->
                                                    </div>

                                                    <!--Grid column-->
                                                    <div class="col-6 pr-0">
                                                        <!--Card content-->
                                                        <div class="card-body">
                                                            <!--Category & Title-->

                                                            <h5 class="card-title mb-1"><strong><a
                                                                            href="{{route('shop.show',$product->slug)}}"
                                                                            class="dark-grey-text">{{$product->name}}</a></strong>
                                                            </h5>
                                                            <span class="badge badge-danger mb-2">فروش ویژه</span>
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
                                                                    <span class="float-left" style="margin-left:5px;">
                                                                    <strong> {{$product->price}} </strong>

                                                                </span>
                                                                    <strong> تومان </strong>

                                                                    <span class="float-left">
                                                        <a class="" data-toggle="tooltip" data-placement="top"
                                                           title="Add to Cart"><i class="fa fa-shopping-cart mr-3"></i></a>
                                                        </span>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!--Card content-->
                                                    </div>
                                                </div>

                                            </div>
                                            <!--Card-->

                                        </div>
                                        <!--Grid column-->
                                    @endforeach

                                </div>
                                <!--Grid row-->


                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </section>
                    <!-- /Section small products -->


                    <!-- Section advertising 1  -->
                    <section>

                        <!-- Grid row -->
                        <div class="row mt-4 pt-1">

                            <!--Grid column-->
                            <div class="col-lg-8 col-md-12 mb-3 mb-md-4 pb-lg-2">
                                <!--Image -->
                                <div class="view zoom z-depth-1">
                                    <img src="/storage/Photos/Others/product2.jpg" class="img-fluid" alt="sample image">
                                    <div class="mask rgba-white-light">
                                        <div class="dark-grey-text d-flex align-items-center pt-4 mr-lg-3 mr-3 pr-lg-3 pr-md-5 pr-3">
                                            <div>
                                                <a><span class="badge badge-danger">فروش ویژه</span></a>
                                                <h2 class="card-title font-weight-bold pt-2"><strong>محصولات اپل</strong></h2>
                                                <p class="">بررسی . انتخاب . خرید آنلاین محصولات اپل </p>
                                                <a class="btn btn-danger btn-sm btn-rounded clearfix d-none d-md-inline-block" href="{{route('shop.index')}}">بیشتر بدانید</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--Image -->
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4">
                                <!--Image -->
                                <div class="view zoom z-depth-1 photo">
                                    <img src="/storage/Photos/Others/product3.jpg" class="img-fluid" alt="sample image">
                                    <div class="mask rgba-stylish-strong">
                                        <div class="white-text flex-center text-center">
                                            <div class="">
                                                <a><span class="badge badge-info">جدید</span></a>
                                                <h2 class="card-title font-weight-bold pt-2"><strong>بهترین لوازم جانبی</strong></h2>
                                                <p class="">متنوع ترین و بروزترین محصولات دیجیتالی. </p>
                                                <a href="{{route('shop.index')}}" class="btn btn-info btn-sm btn-rounded"></i> بیشتر بدانید</a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--Image -->

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                    </section>
                    <!-- /Section advertising 1 -->


                    <!-- Section products  -->
                    <section>

                        <!-- Grid row -->
                        <div class="row">
                        @foreach($randomproduct as $product)
                            <!--Grid column-->
                                <div class="col-lg-4 col-md-6 mb-4">

                                    <!--Card-->
                                    <div class="card card-ecommerce">

                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="/storage/{{$product->image}}" class="img-fluid"
                                                 alt="">
                                            <a href="{{route('shop.show',$product->slug)}}">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--Card image-->

                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Category & Title-->

                                            <h5 class="card-title mb-1"><strong><a
                                                            href="{{route('shop.show',$product->slug)}}"
                                                            class="dark-grey-text">{{$product->name}}</a></strong></h5>
                                            <span class="badge grey white-text mb-2">بیشترین امتیاز</span>
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
                                                    <span class="float-left ml-1"><strong>{{$product->price}}</strong></span>
                                                    <strong> تومان </strong>
                                                    <span class="float-left mr-2">
                                                    <a class="" data-toggle="tooltip" data-placement="top"
                                                       title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
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

                    </section>
                    <!-- /Section products  -->


                    <!--Section product list-->
                    <section class="mb-5">
                        <div class="row">
                            <!-- new Products-->
                            <div class="col-lg-4 col-md-12 pt-4">

                                <hr>
                                <h5 class="text-center font-weight-bold dark-grey-text"><strong>جدیدترین محصولات</strong>
                                </h5>
                                <hr>
                            @foreach($newproduct as $product)

                                <!-- First row -->
                                    <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                        <div class="col-6">
                                            <a href="{{route('shop.show',$product->slug)}}"><img
                                                        src="/storage/{{$product->image}}"
                                                        class="img-fluid"></a>
                                        </div>
                                        <div class="col-6">

                                            <!-- Title -->
                                            <a href="{{route('shop.show',$product->slug)}}"
                                               style="color:black">
                                                <strong>{{$product->name}}</strong>
                                            </a>

                                            <!-- Rating -->
                                            <ul class="rating inline-ul">
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star grey-text"></i></li>
                                            </ul>

                                            <!-- Price -->
                                            <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>{{$product->price}}</strong>
                                                <span>تومان</span>
                                                <span class="grey-text"><small><s>{{$product->price}}</s></small></span>
                                            </h6>

                                        </div>

                                    </div>
                                    <!-- /.First row -->
                                @endforeach


                            </div>
                            <!-- /.new Products -->

                            <!-- Top Sellers-->
                            <div class="col-lg-4 col-md-12 pt-4">

                                <hr>
                                <h5 class="text-center font-weight-bold dark-grey-text"><strong>پرفروشترین محصولات</strong>
                                </h5>
                                <hr>
                            @foreach($topseller as $product)

                                <!-- First row -->
                                    <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                        <div class="col-6">
                                            <a href="{{route('shop.show',$product->slug)}}"><img
                                                        src="/storage/{{$product->image}}"
                                                        class="img-fluid"></a>
                                        </div>
                                        <div class="col-6">

                                            <!-- Title -->
                                            <a href="{{route('shop.show',$product->slug)}}"
                                               style="color:black">
                                                <strong>{{$product->name}}</strong></a>

                                            <!-- Rating -->
                                            <ul class="rating inline-ul">
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star grey-text"></i></li>
                                            </ul>

                                            <!-- Price -->
                                            <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>{{$product->price}}</strong>
                                                <span>تومان</span>
                                                <span class="grey-text"><small><s>{{$product->price}}</s></small></span>
                                            </h6>

                                        </div>

                                    </div>
                                    <!-- /.First row -->

                                @endforeach

                            </div>
                            <!-- /.Top Sellers -->

                            <!-- Random Products-->
                            <div class="col-lg-4 col-md-12 pt-4">

                                <hr>
                                <h5 class="text-center font-weight-bold dark-grey-text"><strong>محصولات تصادفی</strong>
                                </h5>
                                <hr>
                            @foreach($randomproduct as $product)

                                <!-- First row -->
                                    <div class="row mt-5 py-2 mb-4 hoverable align-items-center">

                                        <div class="col-6">
                                            <a href="{{route('shop.show',$product->slug)}}"><img
                                                        src="/storage/{{$product->image}}"
                                                        class="img-fluid"></a>
                                        </div>
                                        <div class="col-6">

                                            <!-- Title -->
                                            <a href="{{route('shop.show',$product->slug)}}"
                                               style="color:black"><strong>{{$product->name}}</strong></a>

                                            <!-- Rating -->
                                            <ul class="rating inline-ul">
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star blue-text"></i></li>
                                                <li><i class="fa fa-star grey-text"></i></li>
                                            </ul>

                                            <!-- Price -->
                                            <h6 class="h6-responsive font-weight-bold dark-grey-text"><strong>{{$product->price}}</strong>
                                                <span>تومان</span>
                                                <span class="grey-text"><small><s>{{$product->price}}</s></small></span>
                                            </h6>

                                        </div>

                                    </div>
                                    <!-- /.First row -->

                                @endforeach

                            </div>
                            <!-- /.Random Products -->
                        </div>

                    </section>
                    <!--Section product list-->

                    <!--Grid row-->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-12">
                            <!--Image -->
                            <div class="view z-depth-1">

                                <img src="/storage/Photos/Others/ecommerce5.jpg" class="img-fluid" alt="sample image">
                                <div class="mask rgba-stylish-slight">
                                    <div class="dark-grey-text text-right pt-lg-5 pt-md-1 mr-5 pr-md-4 pr-0">
                                        <div>
                                            <a>
                                                <span class="badge badge-primary">فروش</span>
                                            </a>
                                            <h2 class="card-title font-weight-bold pt-md-3 pt-1">
                                                <strong>تخفیف یلدایی 20% تا 50% درصد برای تبلت !
                                                </strong>
                                            </h2>
                                            <p class="pb-lg-3 pb-md-1 clearfix d-none d-md-block">به مدت محدود. </p>
                                            <a class="btn mr-0 btn-primary btn-rounded clearfix d-none d-md-inline-block">اطلاعات بیشتر</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <!--Image -->
                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    <h4 class="font-weight-bold mt-4 dark-grey-text"><strong>جدیترین محصولات </strong></h4>
                    <hr class="mb-5">

                    <!-- Grid row -->
                    <div class="row">
@foreach($newproduct as $product)
                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="/storage/{{$product->image}}" class="img-fluid"
                                         alt="">
                                    <a href="{{route('shop.show',$product->slug)}}">
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="{{route('shop.show',$product->slug)}}"
                                                                           class="dark-grey-text">{{$product->name}}</a></strong>
                                    </h5><span class="badge badge-success mb-2">جدید</span>
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
                                            <span class="float-left"><strong>{{$product->price}}</strong></span>
                                            <span>تومان</span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart"><i class="fa fa-shopping-cart ml-3"></i></a>
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
                                <li class="page-item disabled">
                                    <a class="page-link waves-effect waves-effect" aria-label="Previous">
                                        <span aria-hidden="true">«</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>

                                <!--Numbers-->
                                <li class="page-item active"><a class="page-link waves-effect waves-effect">1</a></li>
                                <li class="page-item"><a class="page-link waves-effect waves-effect">2</a></li>
                                <li class="page-item"><a class="page-link waves-effect waves-effect">3</a></li>
                                <li class="page-item"><a class="page-link waves-effect waves-effect">4</a></li>
                                <li class="page-item"><a class="page-link waves-effect waves-effect">5</a></li>

                                <!--Arrow right-->
                                <li class="page-item">
                                    <a class="page-link waves-effect waves-effect" aria-label="Next">
                                        <span aria-hidden="true">»</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>

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

        </div>

    </div>
    <!-- /.Main Container -->

@endsection


@section('extra-js')
    <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script type="text/javascript" src="{{asset('js/algolia.js')}}"></script>

@endsection
