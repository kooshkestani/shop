<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Product;

class shopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
            'allCategories'=> $categories,




        ]);
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

        $query_RelatedProduct=substr($product->name,0,3);
        $RelatedProduct = Product::where('name', 'like', "%$query_RelatedProduct%")->inRandomOrder()->paginate(3);
        if ($product->quantity>setting('site.stock_Threshold')){
            $stocklevel='<span class="badge badge-success product mb-4 mr-2">موجود است</span>';

        }elseif($product->quantity<=setting('site.stock_Threshold')&&$product->quantity>0){
            $stocklevel='<span class="badge badge-warning product mb-4 mr-2">موجودی محدود</span>';

        }else{
            $stocklevel='<span class="badge badge-danger product mb-4 mr-2">موجود نیست</span>';

        }

        return view('Theme2.main.content.product')->with([
            'comments'=>$comments,
            'product' => $product,
            'mightAlsoLike' => $mightAlsoLike,
            'RelatedProduct' => $RelatedProduct,
            'stocklevel'=>$stocklevel,
            'allCategories'=> $categories,

            'title' =>$slug


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
