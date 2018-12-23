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
                    <span>آدرس ها</span>
                </h4>
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

                        <div class="container wow fadeIn">

                            <!-- Heading -->

                            <!--Grid row-->
                            <div class="row">

                                <!--Grid column-->
                                <div class="col-md-12 mb-4">

                                    <!--Card-->
                                    <div class="card">

                                        <div class="card-body">

                                            <!-- Editable table -->
                                            <div class="card">
                                                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
                                                    آدرس ها</h3>
                                                <div class="card-body">
                                                    <div id="table" class="table-editable">
                                                        <table id="dtBasicExample" class="table table-bordered table-responsive-md table-striped text-center">
                                                           <thead>
                                                            <tr>
                                                                <th class="text-center">شماره</th>
                                                                <th class="text-center">آدرس</th>
                                                                <th class="text-center">شهر</th>
                                                                <th class="text-center">استان</th>
                                                                <th class="text-center">کد منطقه</th>
                                                                <th class="text-center">کشور</th>
                                                                <th class="text-center">تلفن</th>
                                                                <th class="text-center">تاریخ بروزرسانی</th>
                                                                <th class="text-center">بروزرسانی</th>

                                                            </tr>
                                                           </thead>

<tbody>
                                                            <tr>
                                                                <td class="pt-3-half"
                                                                    contenteditable="true">{{$address->id}}</td>
                                                                <td class="pt-3-half"
                                                                    contenteditable="true">{{$address->addressline}}</td>
                                                                <td class="pt-3-half"
                                                                    contenteditable="true">{{$address->city}}</td>
                                                                <td class="pt-3-half"
                                                                    contenteditable="true">{{$address->state}}</td>
                                                                <td class="pt-3-half"
                                                                    contenteditable="true">{{$address->zip}}</td>
                                                                <td class="pt-3-half"
                                                                    contenteditable="true">{{$address->country}}</td>
                                                                <td class="pt-3-half"
                                                                    contenteditable="true">{{$address->phone}}</td>
                                                                <td class="pt-3-half"
                                                                    contenteditable="true">{{jdate($address->updated_at)->format('%B %d، %Y')}}</td>


                                                                <td>
                                                                    <span class="table-remove"><button
                                                                                style="border-radius:1.125rem;"
                                                                                type="button"
                                                                                class="btn btn-success btn-rounded btn-sm my-0"
                                                                                data-target="#cart-modal-ex3"
                                                                                data-toggle="modal">بروزرسانی</button></span>
                                                                </td>
                                                            </tr>
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
    <!-- address edit Modal -->
    <div class="modal fade" id="cart-modal-ex3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header text-center">
                    <h4 class="modal-title w-100 font-weight-bold">ویرایش آدرس</h4>

                </div>
                <form class="card-body" enctype="multipart/form-data" method="post"
                      action="{{route('address.update')}}">
                    @method('patch')
                    {{csrf_field()}}
                <div class="modal-body mx-3">
                    <div class="d-flex flex-row justify-content-center">
                        <div class="md-form mb-5">
                            <i class="p-2 fas fa-globe-asia prefix grey-text"></i>
                            <input type="text" id="defaultForm-email" name="country" value="{{$address->country}}" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">کشور</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="p-2 fa fa-flag prefix grey-text"></i>
                            <input type="text" id="defaultForm-email" name="state" value="{{$address->state}}" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">استان</label>
                        </div>
                        <div class="md-form mb-5">
                            <i class="p-2 fa fa-city prefix grey-text"></i>
                            <input type="text" id="defaultForm-email" name="city" value="{{$address->city}}" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">شهر</label>
                        </div>

                    </div>
                    <div class="d-flex flex-row justify-content-center">
                        <div class="md-form mb-3">
                            <i class="p-2 fa fa-phone prefix grey-text"></i>
                            <input type="text" id="defaultForm-email" name="phone" value="{{$address->phone}}" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">تلفن</label>
                        </div>
                        <div class="md-form mb-3">
                            <i class="p-2 fa fa-envelope prefix grey-text"></i>
                            <input type="text" id="defaultForm-email" name="zip" value="{{$address->zip}}" class="form-control validate">
                            <label data-error="wrong" data-success="right" for="defaultForm-email">کد پستی</label>
                        </div>


                    </div>
                    <div class="md-form mb-5">
                        <i class="p-2 fas fa-location-arrow prefix grey-text"></i>

                            <input type="hidden" name="city" value="{{$address->city}}">
                            <textarea type="text" id="form10" class="md-textarea form-control" rows="2"
                                      name="addressline">{{$address->addressline}}</textarea>
                            <label class="m-1 p-1" data-error="wrong" data-success="right"
                                   for="defaultForm-email">آدرس</label>
                    </div>



                    <div class="modal-footer d-flex justify-content-center">
                        <button style="border-radius:1.125rem;" type="button" data-dismiss="modal" aria-label="Close"
                                class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">انصراف
                        </button>
                        <button style="border-radius:1.125rem;" type="submit"
                                class="btn btn-primary btn-rounded btn-sm my-0 waves-effect waves-light">ویرایش
                        </button>
                    </div>
                </div>

                </form>

            </div>
        </div>
    </div>


    <!-- /.address edit Modal -->


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