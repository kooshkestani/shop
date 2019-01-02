<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;

class shopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        $categories  = Category:: paginate(10);
//        return view('Categories.index')->with('categories',$categories);
        $maxPrice = DB::table('products')->orderBy('price', 'desc')->value('price');
        $minPrice = DB::table('products')->orderBy('price')->value('price');


        if (request()->category) {
            $products = Product::with('categories')->whereHas('categories', function ($query) {
                $query->where('slug', request()->category);
            });
            $categories = Category::all();
            $categoryname = $categories->where('slug', request()->category)->first()->name;
        } else {
            $products = Product::take(12);
            $categories = Category::all();
            $categoryname = 'Featured';
        }
        if (request()->sort == 'low_high') {
            $products = $products->orderBy('price')->paginate(9);
        } elseif (request()->sort == 'high_low') {
            $products = $products->orderBy('price', 'desc')->paginate(9);

        } elseif (request()->sort == 'avg') {
            $products = $products->sortBy('price');

        } elseif (request()->sort == 'popularity') {
            $products = $products->sortBy('price');

        } else {
            $products = $products->paginate(9);

        }
        return view('Theme2.main.content.category-v2')->with([
            'products' => $products,
            'categories' => $categories,
            'categoryname' => $categoryname,
            'allCategories' => $categories,
            'maxPrice' => $maxPrice,
            'minPrice' => $minPrice,


        ]);
    }


    public function action(Request $request)
    {
//        if ($request->ajax()) {
//            $output = '';
//            $query = $request->get('query');
//            if ($query != '') {
//                $data = DB::table('products')
//                    ->where('name', 'like', '%' . $query . '%')
//                    ->orWhere('details', 'like', '%' . $query . '%')
//                    ->orWhere('description', 'like', '%' . $query . '%')
//                    ->orWhere('slug', 'like', '%' . $query . '%')
//                    ->orderBy('id', 'desc')
//                    ->get();
//
//            } else {
//                $data = DB::table('products')
//                    ->orderBy('id', 'desc')
//                    ->get();
//            }
//            $total_row = $data->count();
//            if ($total_row > 0) {
//                foreach ($data as $row) {
//                    $output .= '
//
//                        <!--Grid column-->
//                            <div class="col-lg-4 col-md-12 mb-4">
//                                <!--Card-->
//                                <div class="card card-ecommerce">
//
//                                    <!--Card image-->
//                                    <div class="view overlay">
//                                        <img src="/storage/'.{{$row->image}}.'" class="img-fluid"
//                                             alt="">
//                                        <a>
//                                            <div class="mask rgba-white-slight"></div>
//                                        </a>
//                                    </div>
//                                    <!--Card image-->
//
//                                    <!--Card content-->
//                                    <div class="card-body">
//                                        <!--Category & Title-->
//
//                                        <h5 class="card-title mb-1"><strong><a
//                                                        href="{{route(\'shop.show\',$row->slug)}}"
//                                                        class="dark-grey-text">{{$row->name}}</a></strong>
//                                        </h5><span class="badge badge-danger mb-2">bestseller</span>
//                                        <!-- Rating -->
//                                        <ul class="rating">
//                                            <li><i class="fa fa-star blue-text"></i></li>
//                                            <li><i class="fa fa-star blue-text"></i></li>
//                                            <li><i class="fa fa-star blue-text"></i></li>
//                                            <li><i class="fa fa-star blue-text"></i></li>
//                                            <li><i class="fa fa-star blue-text"></i></li>
//                                        </ul>
//
//                                        <!--Card footer-->
//                                        <div class="card-footer pb-0">
//                                            <div class="row mb-0">
//                                                <span class="float-left"><strong>{{$row->price}}<span class="p-2">تومان</span></strong></span>
//                                                <span class="float-right">
//
//                                        <a class="" data-toggle="tooltip" data-placement="top" title="Add to Cart"><i
//                                                    class="fa fa-shopping-cart ml-3"></i></a>
//                                        </span>
//                                            </div>
//                                        </div>
//
//                                    </div>
//                                    <!--Card content-->
//
//                                </div>
//                                <!--Card-->
//                            </div>
//                            <!--Grid column-->
//
//
//                    ';
//
//                }
//            }
//            else{
//                    $output = '
//
//        <h1 align="center">محصولی پیدا نشد</h1>
//
//       ';
//                }
//
////                foreach($data as $row)
////                {
////                    $output .= '
////        <tr>
////         <td>'.$row->CustomerName.'</td>
////         <td>'.$row->Address.'</td>
////         <td>'.$row->City.'</td>
////         <td>'.$row->PostalCode.'</td>
////         <td>'.$row->Country.'</td>
////        </tr>
////        ';
////                }
////            }
////            else
////            {
////                $output = '
////       <tr>
////        <td align="center" colspan="5">No Data Found</td>
////       </tr>
////       ';
////            }
//                $data = array(
//                    'table_data' => $output,
//                    'total_data' => $total_row
//                );
//
//                echo json_encode($data);
//            }
        }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $categories = Category::all();
        $product = Product::where('slug', $slug)->firstOrFail();

        $comments = Comment::where('product_id', $product->id)->get();
        $mightAlsoLike = Product::where('slug', '!=', $slug)->inRandomOrder()->take(3)->get();

        $query_RelatedProduct = substr($product->name, 0, 3);
        $RelatedProduct = Product::where('name', 'like', "%$query_RelatedProduct%")->inRandomOrder()->paginate(3);
        if ($product->quantity > setting('site.stock_Threshold')) {
            $stocklevel = '<span class="badge badge-success product mb-4 mr-2">موجود است</span>';

        } elseif ($product->quantity <= setting('site.stock_Threshold') && $product->quantity > 0) {
            $stocklevel = '<span class="badge badge-warning product mb-4 mr-2">موجودی محدود</span>';

        } else {
            $stocklevel = '<span class="badge badge-danger product mb-4 mr-2">موجود نیست</span>';

        }

        return view('Theme2.main.content.product')->with([
            'comments' => $comments,
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
            'RelatedProduct' => $RelatedProduct,
            'stocklevel' => $stocklevel,
            'allCategories' => $categories,

            'title' => $slug


        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);
        $query = $request->input('query');
        $products = Product::where('name', 'like', "%$query%")
            ->orwhere('details', 'like', "%$query%")
            ->orwhere('description', 'like', "%$query%")
            ->paginate(15);
        return view('Theme2.main.content.search-result')->with('products', $products);
    }

    public function searchAlgolia(Request $request)
    {
        return view('Theme2.main.content.search-algolia');
    }
}
