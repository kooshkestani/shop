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
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <!--firstName-->
                                <div class="md-form ">
                                    <input type="text" id="firstName" class="form-control">
                                    <label for="firstName" class="">First name</label>
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6 mb-2">

                                <!--lastName-->
                                <div class="md-form">
                                    <input type="text" id="lastName" class="form-control">
                                    <label for="lastName" class="">Last name</label>
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Username-->
                        <div class="md-form input-group pl-0 mb-5">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">@</span>
                            </div>
                            <input type="text" class="form-control py-0" placeholder="Username"
                                   aria-describedby="basic-addon1">
                        </div>

                        <!--email-->
                        <div class="md-form mb-5">
                            <input type="text" id="email" class="form-control" placeholder="youremail@example.com">
                            <label for="email" class="">Email (optional)</label>
                        </div>

                        <!--address-->
                        <div class="md-form mb-5">
                            <input type="text" id="address" class="form-control" placeholder="1234 Main St">
                            <label for="address" class="">Address</label>
                        </div>

                        <!--address-2-->
                        <div class="md-form mb-5">
                            <input type="text" id="address-2" class="form-control" placeholder="Apartment or suite">
                            <label for="address-2" class="">Address 2 (optional)</label>
                        </div>

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-12 mb-4">

                                <label for="country">Country</label>
                                <select class="custom-select d-block w-100" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-4">

                                <label for="state">State</label>
                                <select class="custom-select d-block w-100" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>

                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-lg-4 col-md-6 mb-4">

                                <label for="zip">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>

                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <hr>

                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="same-address">
                            <label class="custom-control-label" for="same-address">Shipping address is the same as my
                                billing address</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="save-info">
                            <label class="custom-control-label" for="save-info">Save this information for next
                                time</label>
                        </div>

                        <hr>

                        <div class="d-block my-3">
                            <div class="custom-control custom-radio">
                                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input"
                                       checked required>
                                <label class="custom-control-label" for="credit">Credit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input"
                                       required>
                                <label class="custom-control-label" for="debit">Debit card</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input"
                                       required>
                                <label class="custom-control-label" for="paypal">Paypal</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="cc-name">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="cc-number">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="cc-expiration">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div>
                        <hr class="mb-4">
                        <button class="btn btn-primary btn-lg btn-block" type="submit">پرداخت نهایی</button>

                    </form>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

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
                                    <h6 class="my-0">{{$item->model->name}}</h6>
                                    <h6 class="my-0">{{$item->name}}</h6>
                                    {{-- <small class="text-muted">{{$item->model->details}}</small> --}}
                                </div>
                                <span class="text-muted">{{$item->model->price}}</span>
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
                            <strong>{{Cart::total()}}</strong>
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

