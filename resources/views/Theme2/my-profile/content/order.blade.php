@extends('Theme2.my-profile.my-profile')
@section('content')
    <div class="container-fluid">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between">

                <h4 class="mb-2 mb-sm-0 pt-1">
                    <a href="{{route('users.profile')}}" target="_blank">صفحه اصلی</a>
                    <span>/</span>
                    <span>سفارشات</span>
                </h4>

                <form class="d-flex justify-content-center">
                    <!-- Default input -->
                    <input type="search" placeholder="جستجو" aria-label="Search" class="form-control">
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
            <div class="col-md-12 mb-4">

                <!--Card-->
                <div class="card">

                    <!--Card content-->
                    <div class="card-body">

                        <!-- Editable table -->
                        <div class="card">
                            <h3 class="card-header text-center font-weight-bold text-uppercase py-4">سفارشات کاربر</h3>
                            <div class="card-body">
                                <div id="table" class="table-editable">
                                    <table class="table table-bordered table-responsive-md table-striped text-center">
                                        <tr>
                                            <th class="text-center">سفارش</th>
                                            <th class="text-center">تععداد</th>
                                            <th class="text-center">تاریخ</th>
                                            <th class="text-center">وضعیت</th>
                                            <th class="text-center">مرتب کردن</th>
                                            <th class="text-center">اطلاعات</th>
                                        </tr>

                                            {{--@foreach($order->products as $product)--}}
                                                {{--<div>{{$product->name}}</div>--}}
                                                {{--<div>{{$product->image}}</div>--}}
                                                {{--<div></div>--}}
                                            {{--@endforeach--}}
                                        <script>
                                            var $TABLE = $('#table');
                                            var $BTN = $('#export-btn');
                                            var $EXPORT = $('#export');

                                            $('.table-add').click(function () {
                                                var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');
                                                $TABLE.find('table').append($clone);
                                            });

                                            $('.table-remove').click(function () {
                                                $(this).parents('tr').detach();
                                            });

                                            $('.table-up').click(function () {
                                                var $row = $(this).parents('tr');
                                                if ($row.index() === 1) return; // Don't go above the header
                                                $row.prev().before($row.get(0));
                                            });

                                            $('.table-down').click(function () {
                                                var $row = $(this).parents('tr');
                                                $row.next().after($row.get(0));
                                            });

                                            // A few jQuery helpers for exporting only
                                            jQuery.fn.pop = [].pop;
                                            jQuery.fn.shift = [].shift;

                                            $BTN.click(function () {
                                                var $rows = $TABLE.find('tr:not(:hidden)');
                                                var headers = [];
                                                var data = [];

// Get the headers (add special header logic here)
                                                $($rows.shift()).find('th:not(:empty)').each(function () {
                                                    headers.push($(this).text().toLowerCase());
                                                });

// Turn all existing rows into a loopable array
                                                $rows.each(function () {
                                                    var $td = $(this).find('td');
                                                    var h = {};

// Use the headers from earlier to name our hash keys
                                                    headers.forEach(function (header, i) {
                                                        h[header] = $td.eq(i).text();
                                                    });

                                                    data.push(h);
                                                });

// Output the result
                                                $EXPORT.text(JSON.stringify(data));
                                            });
                                        </script>
                                        @foreach($orders as $order)

                                        <tr>
                                            <td class="pt-3-half" contenteditable="true">{{$order->id}}</td>
                                            <td class="pt-3-half" contenteditable="true">{{$order->total}}</td>
                                            <td class="pt-3-half" contenteditable="true">{{jdate($order->created_at)->format('%B %d، %Y')}}</td>
                                            <td class="pt-3-half" contenteditable="true">{{$order->delivered}}</td>
                                            <td class="pt-3-half">
                                                <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-alt-up" aria-hidden="true"></i></a></span>
                                                <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-alt-down"
                                                                                                             aria-hidden="true"></i></a></span>
                                            </td>
                                            <td>
                                                <span class="table-remove"><button style="border-radius:1.125rem;" type="button" class="btn btn-danger btn-rounded btn-sm my-0">اطلاعات بیشتر</button></span>
                                            </td>
                                        </tr>
                                    @endforeach

                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Editable table -->

                    </div>

                </div>
                <!--/.Card-->

            </div>
            <!--Grid column-->

            <!--Grid column-->
            {{--<div class="col-md-3 mb-4">--}}

                {{--<!--Card-->--}}
                {{--<div class="card mb-4">--}}

                    {{--<!-- Card header -->--}}
                    {{--<div class="card-header text-center">--}}
                        {{--Pie chart--}}
                    {{--</div>--}}

                    {{--<!--Card content-->--}}
                    {{--<div class="card-body">--}}

                        {{--<canvas id="pieChart"></canvas>--}}

                    {{--</div>--}}

                {{--</div>--}}
                {{--<!--/.Card-->--}}

                {{--<!--Card-->--}}
                {{--<div class="card mb-4">--}}

                    {{--<!--Card content-->--}}
                    {{--<div class="card-body">--}}

                        {{--<!-- List group links -->--}}
                        {{--<div class="list-group list-group-flush">--}}
                            {{--<a class="list-group-item list-group-item-action waves-effect">Sales--}}
                                {{--<span class="badge badge-success badge-pill pull-right">22%--}}
                                        {{--<i class="fa fa-arrow-up ml-1"></i>--}}
                                    {{--</span>--}}
                            {{--</a>--}}
                            {{--<a class="list-group-item list-group-item-action waves-effect">Traffic--}}
                                {{--<span class="badge badge-danger badge-pill pull-right">5%--}}
                                        {{--<i class="fa fa-arrow-down ml-1"></i>--}}
                                    {{--</span>--}}
                            {{--</a>--}}
                            {{--<a class="list-group-item list-group-item-action waves-effect">Orders--}}
                                {{--<span class="badge badge-primary badge-pill pull-right">14</span>--}}
                            {{--</a>--}}
                            {{--<a class="list-group-item list-group-item-action waves-effect">Issues--}}
                                {{--<span class="badge badge-primary badge-pill pull-right">123</span>--}}
                            {{--</a>--}}
                            {{--<a class="list-group-item list-group-item-action waves-effect">Messages--}}
                                {{--<span class="badge badge-primary badge-pill pull-right">8</span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        {{--<!-- List group links -->--}}

                    {{--</div>--}}

                {{--</div>--}}
                {{--<!--/.Card-->--}}

            {{--</div>--}}
            <!--Grid column-->

        </div>
        <!--Grid row-->


    </div>

@endsection