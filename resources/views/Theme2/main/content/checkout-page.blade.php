@extends('Theme2.main.index')

@section('extra-css')


    <link href="{{asset('css/mdb.min.css')}}" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="{{asset('css/style.min.css')}}" rel="stylesheet">

@endsection


@section('content')


    <div class="container wow fadeIn">

        <!-- Heading -->
        <h2 class="my-5 h2 text-center">اطلاعات خریدار</h2>
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
    @endif

    <!--Grid row-->
        <div class="row">

            <!--Grid column-->
            <div class="col-md-8 mb-4">

                <!--Card-->
                <div class="card text-right" style="direction: rtl">

                    <!--Card content-->
                    <form class="card-body" method="post" action="{{route('checkout.store')}}">
                    {{csrf_field()}}
                    <!--Grid row-->
                        {{--<div class="row">--}}

                            <!--Grid column-->
                            {{--<div class="col-md-6 mb-2">--}}

                                <!--firstName-->
                                <div class="md-form mb-5">
                                    <input type="text" id="firstName" class="form-control" name="username" value="{{$userInfo->name}}" placeholder="{{$userInfo->name}}">
                                    <label for="firstName" class="">نام کاربر</label>
                                </div>

                            {{--</div>--}}
                            <!--Grid column-->

                            <!--Grid column-->

                        {{--</div>--}}
                        <!--Grid row-->


                        <!--email-->
                        <div class="md-form mb-5">
                            <input type="text" id="email" class="form-control" name="email"  value="{{$userInfo->email}}" placeholder="{{$userInfo->email}}">
                            <label for="email" class="">ایمیل</label>
                        </div>
                        <!--telephone-->
                        <div class="md-form mb-5">
                            <input type="text" id="address" class="form-control" name="phone" value="{{$userInfo->address->phone}}" placeholder="{{$userInfo->address->phone}}">
                            <label for="address" class="">تلفن</label>
                        </div>
                        <!--address-->

                        <div class="d-block my-3 mb-5">
                            <label for="address" class="">آدرس ها</label>

                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                                <label class="custom-control-label" for="paypal">{{$userInfo->address->addressline}}</label>
                            </div>
                        </div>


                        <button class="btn btn-primary btn-lg btn-block" type="submit">پرداخت نهایی</button>

                    </form>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->
            <!-- TEST -->
            {{-- <div class="col-md-4 mb-4">
            </div> --}}
            <!--Grid column-->
            <div class="col-md-4 mb-4">
            @if(Cart::count()>0)
                <!-- Heading -->
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">سبد خرید</span>
                        <span class="badge badge-secondary badge-pill">{{Cart::count()}}</span>
                    </h4>

                    <!-- Cart -->
                    <ul class="list-group mb-3 z-depth-1">
                        @foreach(Cart::content() as $item)
                            <li class="list-group-item d-flex justify-content-between lh-condensed">
                                <div>
                                    {{--<h6 class="my-0">{{$item->model->name}}</h6>--}}
                                    <h6 class="my-0">{{$item->name}}</h6>
                                    {{-- <small class="text-muted">{{$item->model->details}}</small> --}}
                                </div>
                                {{--<span class="text-muted">{{$item->model->price}}</span>--}}
                                <span class="text-muted">{{$item->price}}</span>
                            </li>

                        @endforeach
                        {{--<li class="list-group-item d-flex justify-content-between bg-light">--}}
                            {{--<div class="text-success">--}}
                                {{--<h6 class="my-0">Promo code</h6>--}}
                                {{--<small>EXAMPLECODE</small>--}}
                            {{--</div>--}}
                            {{--<span class="text-success">-$5</span>--}}
                        {{--</li>--}}
                        <li class="list-group-item d-flex justify-content-between">
                            <span>مجموع (تومان)</span>
                            <strong>{{Cart::total(0,"",",")}}</strong>
                        </li>
                    </ul>
                    <!-- Cart -->

                    <!-- Promo code -->
                    {{--<form class="card p-2">--}}
                        {{--<div class="input-group">--}}
                            {{--<input type="text" class="form-control" placeholder="Promo code"--}}
                                   {{--aria-label="Recipient's username" aria-describedby="basic-addon2">--}}
                            {{--<div class="input-group-append">--}}
                                {{--<button class="btn btn-secondary btn-md waves-effect m-0" type="button">Redeem</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                    <!-- Promo code -->
            @else
                    <h3>سبد خرید خالی هست</h3>
            @endif
            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->

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

