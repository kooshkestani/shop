<!DOCTYPE html>
<html lang="en">


@include('Theme2.partials.head')
@include('Theme2.partials.nav')


<!--Main Layout-->
<main>

    <!-- Main Container -->
    <div class="container">

        <!-- Section cart -->
        <section class="section my-5 pb-5">

            <div class="card card-ecommerce">
                <div class="card-body">

                    <!-- Shopping Cart table -->
                    <div class="table-responsive">

                        <table class="table product-table">

                            <!-- Table head -->
                            <thead class="mdb-color lighten-5">
                            <tr>
                                <th></th>
                                <th class="font-weight-bold">
                                    <strong>Product</strong>
                                </th>
                                <th class="font-weight-bold">
                                    <strong>Color</strong>
                                </th>
                                <th></th>
                                <th class="font-weight-bold">
                                    <strong>Price</strong>
                                </th>
                                <th class="font-weight-bold">
                                    <strong>QTY</strong>
                                </th>
                                <th class="font-weight-bold">
                                    <strong>Amount</strong>
                                </th>
                                <th></th>
                            </tr>
                            </thead>
                            <!-- /.Table head -->

                            <!-- Table body -->
                            <tbody>

                            <!-- First row -->
                            <tr>
                                <th scope="row">
                                    <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/13.jpg" alt="" class="img-fluid z-depth-0">
                                </th>
                                <td>
                                    <h5 class="mt-3">
                                        <strong>iPhone</strong>
                                    </h5>
                                    <p class="text-muted">Apple</p>
                                </td>
                                <td>White</td>
                                <td></td>
                                <td>$800</td>
                                <td class="text-center text-md-left">
                                    <span class="qty">1 </span>
                                    <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                        <label class="btn btn-sm btn-primary btn-rounded">
                                            <input type="radio" name="options" id="option1">&mdash;
                                        </label>
                                        <label class="btn btn-sm btn-primary btn-rounded">
                                            <input type="radio" name="options" id="option2">+
                                        </label>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <strong>$800</strong>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                                            title="Remove item">X
                                    </button>
                                </td>
                            </tr>
                            <!-- /.First row -->

                            <!-- Second row -->
                            <tr>
                                <th scope="row">
                                    <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/6.jpg" alt="" class="img-fluid z-depth-0">
                                </th>
                                <td>
                                    <h5 class="mt-3">
                                        <strong>Headphones</strong>
                                    </h5>
                                    <p class="text-muted">Sony</p>
                                </td>
                                <td>Red</td>
                                <td></td>
                                <td>$200</td>
                                <td class="text-center text-md-left">
                                    <span class="qty">3 </span>
                                    <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                        <label class="btn btn-sm btn-primary btn-rounded">
                                            <input type="radio" name="options" id="option1">&mdash;
                                        </label>
                                        <label class="btn btn-sm btn-primary btn-rounded">
                                            <input type="radio" name="options" id="option2">+
                                        </label>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <strong>$600</strong>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                                            title="Remove item">X
                                    </button>
                                </td>
                            </tr>
                            <!-- /.Second row -->

                            <!-- Third row -->
                            <tr>
                                <th scope="row">
                                    <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/1.jpg" alt="" class="img-fluid z-depth-0">
                                </th>
                                <td>
                                    <h5 class="mt-3">
                                        <strong>iPad Pro</strong>
                                    </h5>
                                    <p class="text-muted">Apple</p>
                                </td>
                                <td>Gold</td>
                                <td></td>
                                <td>$600</td>
                                <td class="text-center text-md-left">
                                    <span class="qty">2 </span>
                                    <div class="btn-group radio-group ml-2" data-toggle="buttons">
                                        <label class="btn btn-sm btn-primary btn-rounded">
                                            <input type="radio" name="options" id="option1">&mdash;
                                        </label>
                                        <label class="btn btn-sm btn-primary btn-rounded">
                                            <input type="radio" name="options" id="option2">+
                                        </label>
                                    </div>
                                </td>
                                <td class="font-weight-bold">
                                    <strong>$1200</strong>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top"
                                            title="Remove item">X
                                    </button>
                                </td>
                            </tr>
                            <!-- /.Third row -->

                            <!-- Fourth row -->
                            <tr>
                                <td colspan="3"></td>
                                <td>
                                    <h4 class="mt-2">
                                        <strong>Total</strong>
                                    </h4>
                                </td>
                                <td class="text-right">
                                    <h4 class="mt-2">
                                        <strong>$2600</strong>
                                    </h4>
                                </td>
                                <td colspan="3" class="text-right">
                                    <button type="button" class="btn btn-primary btn-rounded">Complete purchase
                                        <i class="fa fa-angle-right right"></i>
                                    </button>
                                </td>
                            </tr>
                            <!-- Fourth row -->

                            </tbody>
                            <!-- /.Table body -->

                        </table>

                    </div>
                    <!-- /.Shopping Cart table -->

                </div>

            </div>

        </section>
        <!-- /Section cart -->

        <!-- Section products -->
        <section>
            <h4 class="font-weight-bold mt-4 title-1">
                <strong>YOU MAY BE INTERESTED IN</strong>
            </h4>
            <hr class="blue mb-5">

            <!-- Grid row -->
            <div class="row mb-3">

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card card-ecommerce">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/12.jpg" class="img-fluid"
                                 alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body">
                            <!--Category & Title-->

                            <h5 class="card-title mb-1">
                                <strong>
                                    <a href="#" class="dark-grey-text">Sony D74v</a>
                                </strong>
                            </h5>
                            <span class="badge badge-info mb-2">new</span>
                            <!-- Rating -->
                            <ul class="rating">
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                            </ul>

                            <!--Card footer-->
                            <div class="card-footer pb-0">
                                <div class="row mb-0">
                    <span class="float-left">
                      <strong>1439$</strong>
                    </span>
                                    <span class="float-right">
                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                        <i class="fa fa-shopping-cart ml-3"></i>
                      </a>
                    </span>
                                </div>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card card-ecommerce">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/8.jpg" class="img-fluid"
                                 alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body">
                            <!--Category & Title-->

                            <h5 class="card-title mb-1">
                                <strong>
                                    <a href="#" class="dark-grey-text">Samsung V54</a>
                                </strong>
                            </h5>
                            <span class="badge badge-info mb-2">new</span>
                            <!-- Rating -->
                            <ul class="rating">
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                            </ul>

                            <!--Card footer-->
                            <div class="card-footer pb-0">
                                <div class="row mb-0">
                    <span class="float-left">
                      <strong>1439$</strong>
                    </span>
                                    <span class="float-right">
                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                        <i class="fa fa-shopping-cart ml-3"></i>
                      </a>
                    </span>
                                </div>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">
                    <!--Card-->
                    <div class="card card-ecommerce">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/7.jpg" class="img-fluid"
                                 alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body">
                            <!--Category & Title-->

                            <h5 class="card-title mb-1">
                                <strong>
                                    <a href="#" class="dark-grey-text">Dell 786i</a>
                                </strong>
                            </h5>
                            <span class="badge badge-info mb-2">new</span>
                            <!-- Rating -->
                            <ul class="rating">
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star grey-text"></i>
                                </li>
                            </ul>

                            <!--Card footer-->
                            <div class="card-footer pb-0">
                                <div class="row mb-0">
                    <span class="float-left">
                      <strong>1439$</strong>
                    </span>
                                    <span class="float-right">
                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                        <i class="fa fa-shopping-cart ml-3"></i>
                      </a>
                    </span>
                                </div>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-3 col-md-6 mb-4">

                    <!--Card-->
                    <div class="card card-ecommerce">

                        <!--Card image-->
                        <div class="view overlay">
                            <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid"
                                 alt="">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--Card image-->

                        <!--Card content-->
                        <div class="card-body">
                            <!--Category & Title-->

                            <h5 class="card-title mb-1">
                                <strong>
                                    <a href="#" class="dark-grey-text">Canon 675-D</a>
                                </strong>
                            </h5>
                            <span class="badge badge-info mb-2">new</span>
                            <span class="badge badge-success mb-2 ml-2">SALE</span>
                            <!-- Rating -->
                            <ul class="rating">
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                                <li>
                                    <i class="fa fa-star blue-text"></i>
                                </li>
                            </ul>

                            <!--Card footer-->
                            <div class="card-footer pb-0">
                                <div class="row mb-0">
                                    <h5 class="mb-0 pb-0 mt-1 font-weight-bold">
                      <span class="red-text">
                        <strong>$1199</strong>
                      </span>
                                        <span class="grey-text">
                        <small>
                          <s>$1520</s>
                        </small>
                      </span>
                                    </h5>

                                    <span class="float-right">

                      <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                        <i class="fa fa-shopping-cart ml-3"></i>
                      </a>
                    </span>
                                </div>
                            </div>

                        </div>
                        <!--Card content-->

                    </div>
                    <!--Card-->

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->


            <!--Grid row-->
            <div class="row flex-center mb-5">

                <p>
                    <a class="btn btn-primary btn-rounded mb-5" data-toggle="collapse" href="#collapseExample1" aria-expanded="false"
                       aria-controls="collapseExample1">More products</a>
                </p>
                <div class="collapse" id="collapseExample1">

                    <!-- Grid row -->
                    <div class="row">

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/3.jpg" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">Asus GR-597</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating text-left">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                        <span class="float-left">
                          <strong>1439$</strong>
                        </span>
                                            <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                          </a>
                        </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/5.jpg" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">Asus CT-567</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating text-left">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                        <span class="float-left">
                          <strong>1439$</strong>
                        </span>
                                            <span class="float-right">
                          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                          </a>
                        </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">
                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/2.jpg" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">iPad PRO</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <span class="badge badge-success mb-2 ml-2">SALE</span>
                                    <!-- Rating -->
                                    <ul class="rating text-left">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star grey-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <h5 class="mb-0 pb-0 mt-1 font-weight-bold">
                          <span class="red-text">
                            <strong>$699</strong>
                          </span>
                                                <span class="grey-text">
                            <small>
                              <s>$920</s>
                            </small>
                          </span>
                                            </h5>

                                            <span class="float-right">

                          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                          </a>
                        </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-lg-3 col-md-6 mb-4">

                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/4.jpg" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1">
                                        <strong>
                                            <a href="#" class="dark-grey-text">Dell V-964i</a>
                                        </strong>
                                    </h5>
                                    <span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating text-left">
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                        <li>
                                            <i class="fa fa-star blue-text"></i>
                                        </li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                        <span class="float-left">
                          <strong>1439$</strong>
                        </span>
                                            <span class="float-right">

                          <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart">
                            <i class="fa fa-shopping-cart ml-3"></i>
                          </a>
                        </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                </div>

            </div>
            <!--Grid row-->

        </section>
        <!-- Section products -->

    </div>
    <!-- /.Main Container -->

</main>
<!--Main Layout-->

@include('Theme2.partials.footer')
@include('Theme2.partials.cart-modal')


<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="../../js/jquery-3.3.1.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="../../js/popper.min.js"></script>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="../../js/bootstrap.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="../../js/mdb.min.js"></script>
<script type="text/javascript">
    /* WOW.js init */
    new WOW().init();

    // MDB Lightbox Init
    $(function () {
        $("#mdb-lightbox-ui").load("mdb-addons/mdb-lightbox-ui.html");
    });

    // Tooltips Initialization
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

    // SideNav Initialization
    $(".button-collapse").sideNav();

    // Material Select Initialization
    $(document).ready(function () {
        $('.mdb-select').material_select();
    });

</script>
<!-- SCRIPTS -->


</body>


</html>
