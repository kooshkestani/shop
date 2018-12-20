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
                    <span>نظرات</span>
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
                                                <h3 class="card-header text-center font-weight-bold text-uppercase py-4">آدرس ها</h3>
                                                <div class="card-body">
                                                    <div id="table" class="table-editable">
                                                        <table class="table table-bordered table-responsive-md table-striped text-center">
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

                                                                <tr>
                                                                    <td class="pt-3-half" contenteditable="true">{{$address->id}}</td>
                                                                    <td class="pt-3-half" contenteditable="true">{{$address->addressline}}</td>
                                                                    <td class="pt-3-half" contenteditable="true">{{$address->city}}</td>
                                                                    <td class="pt-3-half" contenteditable="true">{{$address->state}}</td>
                                                                    <td class="pt-3-half" contenteditable="true">{{$address->zip}}</td>
                                                                    <td class="pt-3-half" contenteditable="true">{{$address->country}}</td>
                                                                    <td class="pt-3-half" contenteditable="true">{{$address->phone}}</td>
                                                                    <td class="pt-3-half" contenteditable="true">{{jdate($address->updated_at)->format('%B %d، %Y')}}</td>


                                                                    <td>
                                                                        <span class="table-remove"><button style="border-radius:1.125rem;" type="button" class="btn btn-success btn-rounded btn-sm my-0">بروزرسانی</button></span>
                                                                    </td>
                                                                </tr>

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