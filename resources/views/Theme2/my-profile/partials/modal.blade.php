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
                <h4 class="modal-title font-weight-bold dark-grey-text" id="myModalLabel">سبد خرید</h4>
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
