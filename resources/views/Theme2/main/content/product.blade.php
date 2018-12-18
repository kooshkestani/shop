@extends('Theme2.main.index')

@section('extra-css')


    <link href="{{asset('css/mdb2.min.css')}}" rel="stylesheet">

@endsection


@section('content')


    <div class="container mt-5 pt-3">

        <!-- Section: product details -->
        <section id="productDetails" class="pb-5">

            <!--News card-->
            <div class="card mt-5 hoverable">
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="row mx-2">
                            <!--Carousel Wrapper-->
                            <div id="carousel-thumb" class="carousel slide carousel-fade carousel-thumbnails"
                                 data-ride="carousel" style="margin-bottom:0">

                                <!--Slides-->
                                <div class="carousel-inner text-center text-md-left" role="listbox">
                                    <div class="carousel-item active">
                                        <img src="/storage/{{$product->image}}" alt="First slide"
                                             class="img-fluid">
                                    </div>
                                    @foreach (json_decode($product->images) as $image)
                                        <div class="carousel-item">
                                            <img src="\storage\{{$image}}" alt="slide<?Php $count = 1;$count++;?>"
                                                 class="img-fluid">
                                        </div>
                                    @endforeach
                                </div>
                                <!--/.Slides-->

                                <!--Thumbnails-->
                                <a class="carousel-control-prev" href="#carousel-thumb" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel-thumb" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                                <!--/.Thumbnails-->

                            </div>
                            <!--/.Carousel Wrapper-->
                        </div>

                        <!--Grid row-->
                        <div class="row mb-4">
                            <div class="col-md-12">
                                <div class="mdb-lightbox">
                                    <!--Grid column-->
                                    @foreach (json_decode($product->images , true) as $image)
                                        <figure class="col-md-4">
                                            <a href="\storage\{{$image}}">
                                                <img src="\storage\{{$image}}" alt="PIC"
                                                     class="img-fluid img-thumbnail">
                                            </a>
                                        </figure>
                                @endforeach
                                <!--Grid column-->
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->
                    </div>
                    <div class="col-lg-5 ml-3 text-center text-md-right">
                        <h2 class="h2-responsive text-center text-md-right product-name font-weight-bold dark-grey-text mb-1 ml-xl-0 ml-4">
                            <strong>{{$product->name}}</strong>
                        </h2>
                        <span class="badge badge-danger product mb-4 mr-xl-0 mr-4">فروش ویژه</span>
                        </strong>
                        </h2>
                        <span class="badge badge-success product mb-4 mr-2">آماده فروش</span>
                        <h3 class="h3-responsive text-center text-md-right mb-5 mr-xl-0 mr-4">
                            <span class="red-text font-weight-bold">
                                <strong>{{$product->price}}</strong>
                            </span>
                            <span>تومان</span>
                            <span class="grey-text">
                                <small>
                                    <s>{{$product->price}}</s>
                                </small>
                            </span>
                        </h3>

                        <p class="mr-xl-0 mr-4">
                            {{$product->details}}
                        </p>
                        <p class="mr-xl-0 mr-4">
                            <strong>حافظه: </strong>64GB</p>
                        <p class="mr-xl-0 mr-4">
                            <strong>اندازه: </strong>9.6-inch</p>
                        <p class="mr-xl-0 mr-4">
                            <strong>نسبت تصویر: </strong>2048 x 1536</p>
                        <p class="mr-xl-0 mr-4">
                            <strong>در انبار: </strong>{!!$stocklevel!!}</p>

                        <!-- Add to Cart -->
                        <section class="color">
                            <div class="mt-5">
                                <p class="grey-text">انتخاب رنگ</p>
                                <div class="row text-center text-md-right">

                                    <div class="col-md-4 col-12 ">
                                        <!--Radio group-->
                                        <div class="form-group">
                                            <input class="form-check-input" name="group100" type="radio" id="radio100"
                                                   checked="checked">
                                            <label for="radio100" class="form-check-label dark-grey-text">سفید</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!--Radio group-->
                                        <div class="form-group">
                                            <input class="form-check-input" name="group100" type="radio" id="radio101">
                                            <label for="radio101" class="form-check-label dark-grey-text">نقره ایی</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <!--Radio group-->
                                        <div class="form-group">
                                            <input class="form-check-input" name="group100" type="radio" id="radio102">
                                            <label for="radio102" class="form-check-label dark-grey-text">طلایی</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-3 mb-4">
                                    <div class="col-md-12 text-center text-md-left text-md-right">
                                        @if($product->quantity>0)
                                            <form action="{{route('cart.store')}}" method="post">

                                                {{csrf_field()}}
                                                <input type="hidden" name="id" value="{{$product->id }}">
                                                <input type="hidden" name="name" value="{{$product->name }}">
                                                <input type="hidden" name="price" value="{{$product->price }}">
                                                <input type="hidden" name="image" value="{{$product->image }}">

                                                <button class="btn btn-primary btn-rounded" type="submit">
                                                    <i class="fa fa-cart-plus ml-2" aria-hidden="true"></i>اضافه به سبد خرید
                                                </button>
                                            </form>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- /.Add to Cart -->
                    </div>
                </div>
            </div>
            <!--News card-->

        </section>
        <!-- Section: product details -->

        {{--<h4 class="h4-responsive dark-grey-text font-weight-bold mb-5 text-center">--}}
            {{--<strong>Compare iPad models</strong>--}}
        {{--</h4>--}}

        {{--<!--Table-->--}}
        {{--<div class="card mb-5">--}}
            {{--<div class="card-body">--}}

                {{--<table class="table table-responsive-md">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                        {{--<th>--}}
                            {{--<strong>Feature</strong>--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--<strong>12.9-inch iPad Pro</strong>--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--<strong>10.5-inch iPad Pro</strong>--}}
                        {{--</th>--}}
                        {{--<th>--}}
                            {{--<strong>iPad mini 4</strong>--}}
                        {{--</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                        {{--<th scope="row">Storage</th>--}}
                        {{--<td>64GB</td>--}}
                        {{--<td>64GB</td>--}}
                        {{--<td>32GB</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row">Weight</th>--}}
                        {{--<td>1.49 pounds (677 grams)</td>--}}
                        {{--<td>1.03 pounds (469 grams)</td>--}}
                        {{--<td>0.65 pound (298.8 grams)</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row">Width</th>--}}
                        {{--<td>8.68 inches (220.6 mm)</td>--}}
                        {{--<td>6.8 inches (174.1 mm)</td>--}}
                        {{--<td>5.3 inches (134.8 mm)</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row">Depth</th>--}}
                        {{--<td>0.27 inch (6.9 mm)</td>--}}
                        {{--<td>0.24 inch (6.1 mm)</td>--}}
                        {{--<td>0.24 inch (6.1 mm)</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row">Camera</th>--}}
                        {{--<td>12-megapixel</td>--}}
                        {{--<td>12-megapixel</td>--}}
                        {{--<td>8-megapixel</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                        {{--<th scope="row">Video</th>--}}
                        {{--<td>4K HD video recording</td>--}}
                        {{--<td>4K HD video recording</td>--}}
                        {{--<td>1080p HD video recording</td>--}}
                    {{--</tr>--}}
                    {{--</tbody>--}}
                {{--</table>--}}

            {{--</div>--}}

        {{--</div>--}}
        {{--<!--Table-->--}}

        <!-- Product Reviews -->
        <section id="reviews" class="pb-5 mt-4">

            <hr>
            <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                <strong>نظرات کاربران</strong>
            </h4>
            <hr class="mb-5">

            <!--Main wrapper-->
            <div class="comments-list text-center text-md-right">

            @foreach($comments as $comment)
                <!--First row-->
                    <div class="row mb-5">
                        <!--Image column-->
                        <div class="col-sm-2 col-12 mb-3">
                            <img src="/storage/{{$comment->user->avatar}}" alt="sample image"
                                 class="avatar rounded-circle z-depth-1-half">
                        </div>
                        <!--/.Image column-->

                        <!--Content column-->
                        <div class="col-sm-10 col-12">
                            <a>
                                <h5 class="user-name font-weight-bold">{{$comment->user->name}}</h5>
                            </a>
                            <!-- Rating -->
                            <ul class="rating">
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                            </ul>
                            <div class="card-data">
                                <ul class="list-unstyled mb-1">
                                    <li class="comment-date font-small grey-text">
                                        <i class="fa fa-clock-o"></i>{{jdate($comment->created_at)->format('%B %d، %Y')}}
                                    </li>
                                </ul>
                            </div>
                            <p class="dark-grey-text article">{{$comment->body}}.</p>
                        </div>
                        <!--/.Content column-->
                    </div>
                    <!--/.First row-->
            @endforeach

                <form action="{{route('comment.store' , ['product' => $product->id ])}}" method="post"
                      class="form-horizontal">
                {{csrf_field()}}
                <!--Textarea with icon prefix-->
                    <div class="rtl-form md-form amber-textarea active-amber-textarea-2 text-right">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="form24" class="md-textarea form-control" name="body"
                                  rows="3"></textarea>
                        <label for="form24" class="text-right">نظر خود را اینجا بنویسید</label>
                        <button class="btn btn-primary btn-rounded waves-effect waves-light" type="submit">
                            <i class="fa fa-pencil ml-2" aria-hidden="true"></i>ثبت نظر
                        </button>
                    </div>
                </form>
            </div>
            <!--/.Main wrapper-->
        </section>
        <!-- /.Product Reviews -->

        <!--Section: Products v.5-->
        <section id="products" class="pb-5 mt-4">

            <hr>
            <h4 class="h4-responsive dark-grey-text font-weight-bold my-5 text-center">
                <strong>محصولات مرتبط</strong>
            </h4>
            <hr class="mb-5">

            <p class="text-center w-responsive mx-auto mb-5 dark-grey-text">میتوانید محصولات مرتبط با این محصول را در اینجا مشاهده نمایید</p>

            <!--Carousel Wrapper-->
            <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

                <!--Controls-->
                <div class="controls-top">
                    <a class="btn-floating primary-color" href="#multi-item-example" data-slide="prev">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="btn-floating primary-color" href="#multi-item-example" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>
                </div>
                <!--Controls-->

                <!--Indicators-->
                <ol class="carousel-indicators">
                    <li class="primary-color" data-target="#multi-item-example" data-slide-to="0" class="active"></li>
                    <li class="primary-color" data-target="#multi-item-example" data-slide-to="1"></li>
                    <li class="primary-color" data-target="#multi-item-example" data-slide-to="2"></li>
                </ol>
                <!--Indicators-->

                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <!--First slide-->
                    <div class="carousel-item active">
                        @foreach($RelatedProduct as $Related)

                            <div class="col-md-4 mb-4">

                                <!--Card-->
                                <div class="card card-ecommerce">

                                    <!--Card image-->
                                    <div class="view overlay">
                                        <img src="/storage/{{$Related->image}}" class="img-fluid"
                                             alt="">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                    <!--Card image-->

                                    <!--Card content-->
                                    <div class="card-body">
                                        <!--Category & Title-->

                                        <h5 class="card-title mb-1">
                                            <strong>
                                                <a href="{{route('shop.show',$Related->slug)}}"
                                                   class="dark-grey-text">{{$Related->name}}</a>
                                            </strong>
                                        </h5>
                                        <span class="badge badge-danger mb-2">پرفروشترین</span>
                                        <!-- Rating -->
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star blue-text"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star grey-text"></i>
                                            </li>
                                        </ul>

                                        <!--Card footer-->
                                        <div class="card-footer pb-0">
                                            <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>{{$Related->price}}</strong>
                                            </span>
                                                <span>تومان</span>
                                                <span class="float-right">

                                                <a class="" type="submit" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart mr-3"></i>
                                                </a>

                                            </span>
                                            </div>
                                        </div>

                                    </div>
                                    <!--Card content-->

                                </div>
                                <!--Card-->

                            </div>

                        @endforeach

                    </div>
                {{--{{ $RelatedProduct->appends(request()->input())->links() }}--}}

                <!--First slide-->
                    <!--Second slide-->
                    <div class="carousel-item">

                        <div class="col-md-4 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="/storage/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">Samsung V54</a>
                                        </strong>
                                    </h5>
                                    <span class="badge grey mb-2">best rated</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="/storage/Photos/Horizontal/E-commerce/Products/5.jpg" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">Dell V-964i</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="/storage/Photos/Horizontal/E-commerce/Products/1.jpg" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">iPad PRO</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                    </div>
                    <!--Second slide-->

                    <!--Third slide-->
                    <div class="carousel-item">

                        <div class="col-md-4 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="/storage/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">Asus CT-567</a>
                                        </strong>
                                    </h5>
                                    <span class="badge grey mb-2">best rated</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="/storage/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">Dell 786i</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">
                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                        <div class="col-md-4 clearfix d-none d-md-block mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="/storage/Photos/Horizontal/E-commerce/Products/10.jpg" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">Headphones</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-info mb-2">new</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left">
                                                <strong>1439$</strong>
                                            </span>
                                            <span class="float-right">

                                                <a class="" data-toggle="tooltip" data-placement="top"
                                                   title="Add to Cart">
                                                    <i class="fa fa-shopping-cart ml-3"></i>
                                                </a>
                                            </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>

                    </div>
                    <!--Third slide-->

                </div>
                <!--Slides-->

            </div>
            <!--Carousel Wrapper-->

        </section>
        <!--Section: Products v.5-->

    </div>

@endsection

@section('extra-js')

    <script type="text/javascript">

        function increaseValue() {
            //var x=document.getElementById('number').innerHTML;
            var value = parseInt(document.getElementById('number').innerHTML, 10);
            //console.log(x);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById('number').innerHTML = value;
            const id = document.getElementById('number').getAttribute('data-id');
            axios.patch('/cart/${id}', {
                qty: value
            })
                .then(function (response) {
                    console.log(response);
                })
                .catch(function (error) {
                    console.log(error);
                });

        }

        function decreaseValue() {
            var value = parseInt(document.getElementById('number').innerHTML, 10);
            value = isNaN(value) ? 0 : value;
            value < 2 ? value = 2 : '';
            value--;
            document.getElementById('number').innerHTML = value;
        }

    </script>


    <!-- SCRIPTS -->
@endsection



