@extends('Theme2.my-profile.my-profile')
@section('content')
    <div class="container-fluid mt-5">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="https://mdbootstrap.com/docs/jquery/" target="_blank">Home Page</a>
                    <span>/</span>
                    <span>Dashboard</span>
                </h4>

                <form class="d-flex justify-content-center">
                    <!-- Default input -->
                    <input type="search" placeholder="Type your query" aria-label="Search" class="form-control">
                    <button class="btn btn-primary btn-sm my-0 p" type="submit">
                        <i class="fa fa-search"></i>
                    </button>

                </form>

            </div>

        </div>
        <!-- Heading -->

        <!--Grid row-->
        <div class="row wow fadeIn">

            <!--Grid column-->
            <div class="col-md-9 mb-4">

                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">

                        {{--@foreach($orders as $order)--}}
                            {{--<div>{{$order->id}}</div>--}}
                            {{--<div>{{$order->total}}</div>--}}

                            {{--@foreach($order->products as $product)--}}
                                {{--<div>{{$product->name}}</div>--}}
                                {{--<div>{{$product->image}}</div>--}}
                                {{--<div></div>--}}
                            {{--@endforeach--}}
                        {{--@endforeach--}}
                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 mb-4">

                <!--Card-->
                <div class="card mb-4">

                    <!-- Card header -->
                    <div class="card-header text-center">
                        Pie chart
                    </div>

                    <!--Card content-->
                    <div class="card-body">

                        <canvas id="pieChart"></canvas>

                    </div>

                </div>
                <!--/.Card-->

                <!--Card-->
                <div class="card mb-4">

                    <!--Card content-->
                    <div class="card-body">

                        <!-- List group links -->
                        <div class="list-group list-group-flush">
                            <a class="list-group-item list-group-item-action waves-effect">Sales
                                <span class="badge badge-success badge-pill pull-right">22%
                                        <i class="fa fa-arrow-up ml-1"></i>
                                    </span>
                            </a>
                            <a class="list-group-item list-group-item-action waves-effect">Traffic
                                <span class="badge badge-danger badge-pill pull-right">5%
                                        <i class="fa fa-arrow-down ml-1"></i>
                                    </span>
                            </a>
                            <a class="list-group-item list-group-item-action waves-effect">Orders
                                <span class="badge badge-primary badge-pill pull-right">14</span>
                            </a>
                            <a class="list-group-item list-group-item-action waves-effect">Issues
                                <span class="badge badge-primary badge-pill pull-right">123</span>
                            </a>
                            <a class="list-group-item list-group-item-action waves-effect">Messages
                                <span class="badge badge-primary badge-pill pull-right">8</span>
                            </a>
                        </div>
                        <!-- List group links -->

                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

        </div>
        <!--Grid row-->


    </div>

@endsection