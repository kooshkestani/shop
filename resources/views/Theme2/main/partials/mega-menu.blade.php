<!-- Mega menu -->
<div class="container mt-5 pt-3">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark primary-color mt-5">

        <!-- Navbar brand -->
        {{-- <a class="font-weight-bold white-text mr-4" href="#">Categories</a> --}}

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent1">

            <!-- Links -->
            <ul class="navbar-nav ml-auto">
                @foreach ($allCategories as $category)
                <li class="nav-item dropdown mega-dropdown active">
                    <a 
                    class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    style="background-color:transparent;padding-right:1.2rem;padding-left:0rem;">
                        {{$category->name}}
                    </a>
                    <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">
                        <div class="row mx-md-4 mx-1">
                             @php
                                $pro = $category->products()->get();
                            @endphp
                            @foreach ($pro as $item)
                            @if ($loop->iteration % 5 ==0)
                                <div class="col-lg-3 col-xl-3">
                                    <ul class="caret-style pl-0">
                                        <li style="list-style:none">
                                            <a href="{{route('shop.show',$item->slug)}}">
                                                <img style="
                                                border-radius: 4px;
                                                padding: 5px;
                                                width: 100%;" src="storage/{{$item->image}}" alt="pic">
                                            </a>
                                        </li>    
                                    </ul>
                                </div> 
                            @else
                                <div class="col-lg-3 col-xl-3">
                                    <ul class="caret-style pl-0">
                                       <li style="list-style:none">
                                           <a href="{{route('shop.show',$item->slug)}}">
                                                <img style="
                                                border-radius: 4px;
                                                padding: 2px;
                                                width: 100%;" src="storage/{{$item->image}}" alt="pic">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            @endif
                            @endforeach
                            {{-- <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Processor Type</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Intel Core i5 4th Gen.</a></li>
                                    <li class=""><a class="menu-item" href="#">Intel Core i5 5th Gen.</a></li>
                                    <li class=""><a class="menu-item" href="#">Intel Core i5 3th Gen.</a></li>
                                    <li class=""><a class="menu-item" href="#">Intel Core i5 6th Gen.</a></li>
                                    <li class=""><a class="menu-item" href="#">Intel Core i5 7th Gen.</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Customers opinions</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Totam rem aperiam eaque</a></li>
                                    <li class=""><a class="menu-item" href="#">Beatae vitae dicta sun</a></li>
                                    <li class=""><a class="menu-item" href="#">Quae ab illo inventore</a></li>
                                    <li class=""><a class="menu-item" href="#">Nemo enim ipsam</a></li>
                                    <li class=""><a class="menu-item" href="#">Neque porro quisquam est</a></li>
                                </ul>
                            </div> --}}
                        </div>
                    </div>
                </li>
                @endforeach
                
                {{-- <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cameras</a>
                    <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">
                        <div class="row mx-md-4 mx-1">
                            <div class="col-md-12 col-lg-4 sub-menu my-lg-5 mt-5 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Featured</h6>
                                <!--Featured image-->
                                <div class="view overlay mb-3 z-depth-1">
                                    <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/9.jpg" class="img-fluid" alt="First sample image">
                                    <div class="mask flex-center rgba-white-slight">
                                        <p></p>
                                    </div>
                                </div>
                                <h4 class="mb-2"><a class="news-title-2 pl-0" href="#">Lorem ipsum dolor sit</a></h4>
                            </div>
                            <div class="col-md-6 col-lg-4 sub-menu my-lg-5 my-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Brands</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Canon</a></li>
                                    <li class=""><a class="menu-item" href="#">Nikon</a></li>
                                    <li class=""><a class="menu-item" href="#">Sony</a></li>
                                    <li class=""><a class="menu-item" href="#">GoPro</a></li>
                                    <li class=""><a class="menu-item" href="#">Samsung</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-lg-4 sub-menu my-lg-5 my-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Accesories</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Excepteur sint</a></li>
                                    <li class=""><a class="menu-item" href="#">Sunt in culpa</a></li>
                                    <li class=""><a class="menu-item" href="#">Sed ut perspiciatis</a></li>
                                    <li class=""><a class="menu-item" href="#">Mollit anim id est</a></li>
                                    <li class=""><a class="menu-item" href="#">Accusantium doloremque</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown mega-dropdown">
                    <a class="nav-link dropdown-toggle no-caret" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Accesories</a>
                    <div class="dropdown-menu mega-menu v-2 row z-depth-1 white" aria-labelledby="navbarDropdownMenuLink1">
                        <div class="row mx-md-4 mx-1">
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-5 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Featured</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item mb-0" href="#">Mouse</a></li>
                                    <li class=""><a class="menu-item" href="#">Printer</a></li>
                                    <li class=""><a class="menu-item" href="#">Laptop bags</a></li>
                                    <li class=""><a class="menu-item" href="#">Software</a></li>
                                    <li class=""><a class="menu-item" href="#">Headphones</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-md-5 mt-4 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Related</h6>
                                <!--Featured image-->
                                <div class="view overlay mb-3 z-depth-1">
                                    <img src="../../../../../img/Photos/Horizontal/Work/6-col/img%20(43).jpg" class="img-fluid" alt="First sample image">
                                    <div class="mask flex-center rgba-white-slight">
                                        <p></p>
                                    </div>
                                </div>
                                <h4 class="mb-2"><a class="news-title-2 pl-0" href="#">Lorem ipsum dolor sit</a></h4>
                                <p class="font-small text-uppercase dark-grey-text"><i class="fa fa-clock-o pr-2" aria-hidden="true"></i>July 17, 2017 / <i class="fa fa-comments-o px-1"
                                                                                                                                                            aria-hidden="true"></i> 20</p>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-4">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">Bestseller</h6>
                                <!--Featured image-->
                                <div class="view overlay mb-3 z-depth-1">
                                    <img src="../../../../../img/Photos/Horizontal/E-commerce/Products/6.jpg" class="img-fluid" alt="First sample image">
                                    <div class="mask flex-center rgba-white-slight">
                                        <p></p>
                                    </div>
                                </div>
                                <h4 class="mb-2"><a class="news-title-2 pl-0" href="#">Ut labore et dolore magna</a></h4>
                                <p class="font-small text-uppercase dark-grey-text"><i class="fa fa-clock-o pr-2" aria-hidden="true"></i>July 16, 2017 / <i class="fa fa-comments-o px-1"
                                                                                                                                                            aria-hidden="true"></i> 25</p>
                            </div>
                            <div class="col-md-6 col-xl-3 sub-menu my-xl-5 mt-4 mb-5">
                                <h6 class="sub-title text-uppercase font-weight-bold blue-text">
                                    Customers opinion</h6>
                                <ul class="caret-style pl-0">
                                    <li class=""><a class="menu-item" href="#">Totam rem aperiam eaque</a></li>
                                    <li class=""><a class="menu-item" href="#">Beatae vitae dicta sun</a></li>
                                    <li class=""><a class="menu-item" href="#">Quae ab illo inventore</a></li>
                                    <li class=""><a class="menu-item" href="#">Nemo enim ipsam</a></li>
                                    <li class=""><a class="menu-item" href="#">Neque porro quisquam est</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li> --}}

            </ul>
            <!-- Links -->


            <div class="aa-input-container" id="aa-input-container" style="">
                <input type="search" id="aa-search-input" class="aa-input-search" placeholder="جستجوی محصولات" name="search" autocomplete="off" />
                <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
                    <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
                </svg>
            </div>
            <!-- Search form -->
            {{-- <form action="{{route('search')}}" method="get" class="search-form" role="search">
                <div class="form-group md-form my-0 waves-light">
                    <input type="text" name="query" id="query" class="form-control"  placeholder="Search">
                </div>
            </form> --}}
        </div>
        <!-- Collapsible content -->

    </nav>
    <!--/.Navbar-->

</div>
<!-- Mega menu -->
