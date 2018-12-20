<!-- Cart Modal -->
<div class="modal fade cart-modal" id="cart-modal-ex" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                    @if (Cart::content()->count() > 0)
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
                                @foreach (Cart::content() as $item)
                                    <tr>
                                        <td>{{$item->name}}</td>
                                        <td>
                                            {{$item->price}} <label>تومان </label> 
                                        </td>
                                        <td>{{$item->qty}}</td>
                                        <td>
                                            {{$item->qty * $item->price}} <label>تومان </label> 
                                        </td>
                                        {{-- <td>
                                            <a>
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <a class="btn btn-primary btn-rounded btn-sm" href="{{route('cart.index')}}" style="font-size:14px">
                            ویرایش سبد خرید
                        </a>
                    @else
                        <ul class="list-group">
                                <li class="list-group-item list-group-item-danger text-center">هیچ محصولی در سبد خرید شما وجود ندارد</li>
                        </ul>
                    @endif


            </div>
            <!--Footer-->
            {{-- <div class="modal-footer">
                <button type="button" class="btn btn-grey btn-rounded btn-sm" data-dismiss="modal"></button>
            </div> --}}
        </div>
        <!--/.Content-->
    </div>
</div>

<!-- /.Cart Modal -->

<!-- Comment edit Modal -->
{{--<div class="modal fade" id="cart-modal-ex2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"--}}
     {{--aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
        {{--<div class="modal-content">--}}
            {{--<div class="modal-header text-center">--}}
                {{--<h4 class="modal-title w-100 font-weight-bold">ویرایش نظر</h4>--}}

            {{--</div>--}}
            {{--<div class="modal-body mx-3">--}}
                {{--<div class="md-form mb-5">--}}
                    {{--<i class="fas fa-pencil prefix grey-text"></i>--}}
                    {{--<textarea type="text" id="form10" class="md-textarea form-control" rows="3" >{{$comment->body}}</textarea>--}}
                    {{--<label class="m-1 p-1" data-error="wrong" data-success="right" for="defaultForm-email">متن</label>--}}
                {{--</div>--}}


            {{--</div>--}}
            {{--<div class="modal-footer d-flex justify-content-center">--}}
                {{--<button style="border-radius:1.125rem;" type="button"  data-dismiss="modal" aria-label="Close" class="btn btn-danger btn-rounded btn-sm my-0 waves-effect waves-light">انصراف</button>--}}
                {{--<button style="border-radius:1.125rem;" type="button" class="btn btn-primary btn-rounded btn-sm my-0 waves-effect waves-light">ویرایش</button>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}


<!-- /.Comment edit Modal -->


