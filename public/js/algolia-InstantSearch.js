(function() {
    const search = instantsearch({
        appId: 'IZO55MWFBD',
        apiKey: 'd62bbbc0e3f985302e555fe9c12105dc',
        indexName: 'products',
        urlSync: true
    });




    search.addWidget(
        instantsearch.widgets.hits({
            container: '#row',
            templates: {
                empty: 'No results',
                item: function(item) {
                    return `





                        <div class="col-lg-4 col-md-12 mb-4">
                            <!--Card-->
                            <div class="card card-ecommerce">

                                <!--Card image-->
                                <div class="view overlay">
                                    <img src="${window.location.origin}/storage/${item.image}" class="img-fluid"
                                         alt="">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                                <!--Card image-->

                                <!--Card content-->
                                <div class="card-body">
                                    <!--Category & Title-->

                                    <h5 class="card-title mb-1"><strong><a href="{{route('shop.show',$product->slug)}}"
                                                                           class="dark-grey-text">${item._highlightResult.name.value}</a></strong>
                                    </h5><span class="badge badge-danger mb-2">bestseller</span>
                                    <!-- Rating -->
                                    <ul class="rating">
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                        <li><i class="fa fa-star blue-text"></i></li>
                                    </ul>

                                    <!--Card footer-->
                                    <div class="card-footer pb-0">
                                        <div class="row mb-0">
                                            <span class="float-left"><strong>$${(item.price / 100).toFixed(2)}</strong></span>
                                            <span class="float-right">

                                        <a href="${window.location.origin}/shop/${item.slug}" class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
                                                    class="fa fa-shopping-cart ml-3"></i></a>
                                        </span>
                                        </div>
                                    </div>

                                </div>
                                <!--Card content-->

                            </div>
                            <!--Card-->
                        </div>

                    `;
                }
            }
        })
    );

    // initialize SearchBox
    // search.addWidget(
    //     instantsearch.widgets.searchBox({
    //         container: '#search-box',
    //         placeholder: 'Search for products'
    //     })
    // );

    // initialize pagination
    // search.addWidget(
    //     instantsearch.widgets.pagination({
    //         container: '#pagination',
    //         maxPages: 20,
    //         // default is to scroll to 'body', here we disable this behavior
    //         scrollTo: false
    //     })
    // );

    // search.addWidget(
    //     instantsearch.widgets.stats({
    //         container: '#stats-container'
    //     })
    // );

    // initialize RefinementList
    // search.addWidget(
    //     instantsearch.widgets.refinementList({
    //         container: '#refinement-list',
    //         attributeName: 'categories',
    //         sortBy: ['name:asc']
    //     })
    // );

    search.start();
})();
