@extends('layouts.product-page')
@section('content')
    <!--Main layout-->
    <main class="mt-5 pt-4">
        <div class="container dark-grey-text mt-5">

            <!--Grid row-->
            <div class="row wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <img src="{{$product->image}}" class="img-fluid" alt="">

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 mb-4">

                    <!--Content-->
                    <div class="p-4">

                        <div class="mb-3">
                            <a href="">
                                <span class="badge purple mr-1">Category 2</span>
                            </a>
                            <a href="">
                                <span class="badge blue mr-1">New</span>
                            </a>
                            <a href="">
                                <span class="badge red mr-1">Bestseller</span>
                            </a>
                        </div>

                        <p class="lead">
              <span class="mr-1">
                <del>$200</del>
              </span>
                            <span>{{$product->price}}</span>
                        </p>

                        <p class="lead font-weight-bold">details</p>

                        <p>{{$product->details}}</p>

                        <form class="d-flex justify-content-left"action="{{route('cart.store')}}"method="post">
                            {{csrf_field()}}
                            <!-- Default input -->
                                <input type="hidden" name="id" value="{{$product->id }}">
                                <input type="hidden" name="name" value="{{$product->name }}">
                                <input type="hidden" name="price" value="{{$product->price }}">
                            <input type="number" value="" aria-label="Search" class="form-control" style="width: 100px">
                            <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart
                                <i class="fa fa-shopping-cart ml-1"></i>
                            </button>

                        </form>

                    </div>
                    <!--Content-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <hr>

            <!--Grid row-->
            <div class="row d-flex justify-content-center wow fadeIn">

                <!--Grid column-->
                <div class="col-md-6 text-center">

                    <h4 class="my-4 h4">description</h4>

                    <p>{{$product->description}}</p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row wow fadeIn">
@foreach($mightAlsoLike as $product)
                <!--Grid column-->
                <div class="col-lg-4 col-md-12 mb-4">

                    <img src="{{$product->image}}" class="img-fluid" alt="{{$product->slug}}">

                </div>
                <!--Grid column-->
@endforeach

            </div>
            <!--Grid row-->

        </div>
    </main>
    <!--Main layout-->


@endsection