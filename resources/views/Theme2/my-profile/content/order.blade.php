@extends('Theme2.my-profile.my-profile')
@section('css-extra')
    <link href="{{asset('css/addons/datatables.min.css')}}" rel="stylesheet">

    <style>
        table.dataTable thead .sorting:after,
        table.dataTable thead .sorting:before,
        table.dataTable thead .sorting_asc:after,
        table.dataTable thead .sorting_asc:before,
        table.dataTable thead .sorting_asc_disabled:after,
        table.dataTable thead .sorting_asc_disabled:before,
        table.dataTable thead .sorting_desc:after,
        table.dataTable thead .sorting_desc:before,
        table.dataTable thead .sorting_desc_disabled:after,
        table.dataTable thead .sorting_desc_disabled:before {
            bottom: .5em;
        }
    </style>
@endsection
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
                                    <table id="dtBasicExample" style="direction: rtl"
                                           class="table table-bordered table-responsive-md table-striped text-center">
                                        <thead>
                                        <tr>
                                            <th class="text-center sorting" >شماره سفارش</th>
                                            <th class="text-center sorting" >مبلغ پرداختی</th>
                                            <th class="text-center sorting" >ثبت سفارش</th>
                                            <th class="text-center sorting" >وضعیت</th>
                                            <th class="text-center sorting" >اطلاعات</th>
                                        </tr>
                                        </thead>
<tbody>
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
</tbody>
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

                        @foreach ($OrderProduct as $items)

                        <tr>
                        <td></td>
                        <td>
                        <label>تومان </label>
                        </td>
                        <td></td>
                        <td>
                         <label>تومان </label>
                        </td>
                         <td>
                        <a>
                        <i class="fa fa-remove"></i>
                        </a>
                        </td>
                        </tr>
                        @endforeach
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
@section('extra-js')
    <script type="text/javascript" src="{{asset('js/addons/datatables.min.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#dtBasicExample').DataTable();
            $('.dataTables_length').addClass('bs-select');
        });
    </script>
    @endsection