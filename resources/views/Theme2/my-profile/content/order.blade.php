@extends('Theme2.my-profile.my-profile')
@section('content')
    <div class="container-fluid">

        <!-- Heading -->
        <div class="card mb-4 wow fadeIn">

            <!--Card content-->
            <div class="card-body d-sm-flex justify-content-between" style="direction: rtl">

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
                                    <table style="direction: rtl"
                                           class="table table-bordered table-responsive-md table-striped text-center">
                                        <tr>
                                            <th class="text-center">شماره سفارش</th>
                                            <th class="text-center">مبلغ پرداختی</th>
                                            <th class="text-center">ثبت سفارش</th>
                                            <th class="text-center">وضعیت</th>
                                            <th class="text-center">مرتب کردن</th>
                                            <th class="text-center">اطلاعات</th>
                                        </tr>


                                        {{--<script>--}}
                                            {{--var $TABLE = $('#table');--}}
                                            {{--var $BTN = $('#export-btn');--}}
                                            {{--var $EXPORT = $('#export');--}}

                                            {{--$('.table-add').click(function () {--}}
                                                {{--var $clone = $TABLE.find('tr.hide').clone(true).removeClass('hide table-line');--}}
                                                {{--$TABLE.find('table').append($clone);--}}
                                            {{--});--}}

                                            {{--$('.table-remove').click(function () {--}}
                                                {{--$(this).parents('tr').detach();--}}
                                            {{--});--}}

                                            {{--$('.table-up').click(function () {--}}
                                                {{--var $row = $(this).parents('tr');--}}
                                                {{--if ($row.index() === 1) return; // Don't go above the header--}}
                                                {{--$row.prev().before($row.get(0));--}}
                                            {{--});--}}

                                            {{--$('.table-down').click(function () {--}}
                                                {{--var $row = $(this).parents('tr');--}}
                                                {{--$row.next().after($row.get(0));--}}
                                            {{--});--}}

                                            {{--// A few jQuery helpers for exporting only--}}
                                            {{--jQuery.fn.pop = [].pop;--}}
                                            {{--jQuery.fn.shift = [].shift;--}}

                                            {{--$BTN.click(function () {--}}
                                                {{--var $rows = $TABLE.find('tr:not(:hidden)');--}}
                                                {{--var headers = [];--}}
                                                {{--var data = [];--}}

{{--// Get the headers (add special header logic here)--}}
                                                {{--$($rows.shift()).find('th:not(:empty)').each(function () {--}}
                                                    {{--headers.push($(this).text().toLowerCase());--}}
                                                {{--});--}}

{{--// Turn all existing rows into a loopable array--}}
                                                {{--$rows.each(function () {--}}
                                                    {{--var $td = $(this).find('td');--}}
                                                    {{--var h = {};--}}

{{--// Use the headers from earlier to name our hash keys--}}
                                                    {{--headers.forEach(function (header, i) {--}}
                                                        {{--h[header] = $td.eq(i).text();--}}
                                                    {{--});--}}

                                                    {{--data.push(h);--}}
                                                {{--});--}}

{{--// Output the result--}}
                                                {{--$EXPORT.text(JSON.stringify(data));--}}
                                            {{--});--}}
                                        {{--</script>--}}
                                        @foreach($orders as $order)

                                            <tr>
                                                <td class="pt-3-half" contenteditable="true">{{$order->id}}</td>
                                                <td class="pt-3-half" contenteditable="true">{{$order->total}}<span
                                                            class="p-2">تومان</span></td>
                                                <td class="pt-3-half"
                                                    contenteditable="true">{{jdate($order->created_at)->format('%B %d، %Y')}}</td>
                                                <td class="pt-3-half" contenteditable="true">
                                                    @if($order->status==1)

                                                        <span class="table-remove"><button
                                                                    style="border-radius:1.125rem;"
                                                                    type="button"
                                                                    class="btn btn-danger btn-rounded btn-sm my-0">پرداخت نشده</button></span>

                                                    @elseif($order->status==2)
                                                        <span class="table-remove"><button
                                                                    style="border-radius:1.125rem;"
                                                                    type="button"
                                                                    class="btn btn-success btn-rounded btn-sm my-0">پرداخت شده</button></span>
                                                    @elseif($order->status==3)
                                                        <span class="table-remove"><button
                                                                    style="border-radius:1.125rem;"
                                                                    type="button"
                                                                    class="btn btn-warning btn-rounded btn-sm my-0">ارسال به پست</button></span>
                                                    @elseif($order->status==4)
                                                        <span class="table-remove"><button
                                                                    style="border-radius:1.125rem;"
                                                                    type="button"
                                                                    class="btn btn-primary btn-rounded btn-sm my-0">تحویل داده شده</button></span>
                                                    @endif
                                                </td>
                                                <td class="pt-3-half">
                                                    <span class="table-up"><a href="#!" class="indigo-text"><i
                                                                    class="fa fa-long-arrow-alt-up"
                                                                    aria-hidden="true"></i></a></span>
                                                    <span class="table-down"><a href="#!" class="indigo-text"><i
                                                                    class="fa fa-long-arrow-alt-down"
                                                                    aria-hidden="true"></i></a></span>
                                                </td>
                                                <td>
                                                    <span class="table-remove">
                                                        <button style="border-radius:1.125rem;"
                                                                type="button"
                                                                class="btn btn-danger btn-rounded btn-sm my-0"
                                                                data-target="#cart-modal-ex4"
                                                                data-toggle="modal" value="{{$order->id}}">
                                                            اطلاعات بیشتر
                                                        </button>
                                                    </span>
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


        </div>
        <!--Grid row-->


    </div>

@endsection
@section('modal')

    <div class="modal fade cart-modal" id="cart-modal-ex4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title font-weight-bold dark-grey-text" id="myModalLabel">نمایش</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>نام محصول</th>
                                <th>قیمت محصول</th>
                                <th>تعداد</th>
                                <th>قیمت کل</th>
                            </tr>
                            </thead>
                            <tbody>

                            {{--@foreach (Cart::content() as $item)--}}
                                {{--<tr>--}}
                                    {{--<td>{{$item->name}}</td>--}}
                                    {{--<td>--}}
                                        {{--{{$item->price}} <label>تومان </label>--}}
                                    {{--</td>--}}
                                    {{--<td>{{$item->qty}}</td>--}}
                                    {{--<td>--}}
                                        {{--{{$item->qty * $item->price}} <label>تومان </label>--}}
                                    {{--</td>--}}
                                    {{-- <td>--}}
                                        {{--<a>--}}
                                            {{--<i class="fa fa-remove"></i>--}}
                                        {{--</a>--}}
                                    {{--</td> --}}
                                {{--</tr>--}}
                            {{--@endforeach--}}
                            </tbody>
                        </table>
                        <a class="btn btn-primary btn-rounded btn-sm" href="{{route('cart.index')}}"
                           style="font-size:14px">
                            ویرایش سبد خرید
                        </a>



                </div>
                <!--Footer-->
                {{-- <div class="modal-footer">
                    <button type="button" class="btn btn-grey btn-rounded btn-sm" data-dismiss="modal"></button>
                </div> --}}
            </div>
            <!--/.Content-->
        </div>
    </div>

@endsection