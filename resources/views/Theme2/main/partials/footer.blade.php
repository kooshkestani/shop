
<!--Footer-->
<footer class="page-footer text-center text-md-left stylish-color-dark pt-0">

    {{-- <div style="background-color: #4285f4;">
        <div class="container">
            <!--Grid row-->
            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0 px-2">
                        <i class="fa fa-facebook white-text"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic px-2">
                        <i class="fa fa-twitter white-text"> </i>
                    </a>
                    <!--Google +-->
                    <a class="gplus-ic px-2">
                        <i class="fa fa-google-plus white-text"> </i>
                    </a>
                    <!--Linkedin-->
                    <a class="li-ic px-2">
                        <i class="fa fa-linkedin white-text"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic px-2">
                        <i class="fa fa-instagram white-text"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </div>
    </div> --}}

    <!--Footer Links-->
    <div class="container mt-5 mb-4 text-center text-md-left pt-2">
        <div class="row mt-3">

            <!--First column-->
            <div class="col-md-3 col-lg-4 col-xl-3 mb-4 text-right">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>دیجی کالا</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>دیجی‌کالا به عنوان یکی از قدیمی‌ترین فروشگاه های اینترنتی با بیش از یک دهه تجربه، با پایبندی به سه اصل کلیدی، پرداخت در محل، 7 روز ضمانت بازگشت کالا و تضمین اصل‌بودن کالا، موفق شده تا همگام با فروشگاه‌های معتبر جهان، به بزرگ‌ترین فروشگاه اینترنتی ایران تبدیل شود. به محض ورود به دیجی‌کالا با یک سایت پر از کالا رو به رو می‌شوید! هر آنچه که نیاز دارید و به ذهن شما خطور می‌کند در اینجا پیدا خواهید کرد.</p>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 text-right">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>محصولات</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                @foreach ($allCategories as $category)

                <p>
                    <a href="{{route('shop.index')}}">{{$category->name}}</a>
                </p>
                    @endforeach
            </div>
            <!--/.Second column-->

            <!--Third column-->
            {{-- <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>Useful links</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <a href="#!">Your Account</a>
                </p>
                <p>
                    <a href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a href="#!">Help</a>
                </p>
            </div> --}}
            <!--/.Third column-->

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3 text-right">
                <h6 class="text-uppercase font-weight-bold">
                    <strong>ارتباط با ما</strong>
                </h6>
                <hr class="blue mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                <p>
                    <i class="fa fa-home ml-3"></i> خیابان آزادی،  دانشگاه شریف۷</p>
                <p>
                    <i class="fa fa-envelope ml-3"></i> info@example.com</p>
                <p>
                    <i class="fa fa-phone ml-3"></i> + 01 234 567 88</p>
                <p>
                    <i class="fa fa-print ml-3"></i> + 01 234 567 89</p>
            </div>
            <!--/.Fourth column-->

        </div>
    </div>
    <!--/.Footer Links-->

    <!-- Copyright-->
    <div class="footer-copyright py-3 text-center">
        <div class="container-fluid">
            © 1397 کليه حقوق اين سايت متعلق به  <a href="https://github.com/kooshkestani/shop" target="_blank"><i class="fa fa-heart"></i></a> می باشد
        </div>
    </div>
    <!--/.Copyright -->

</footer>
<!--/.Footer-->


