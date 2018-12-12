<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Category;

class LandingPageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::InRandomOrder()->take(6)->get();
        $topseller=Product::orderBy('price', 'desc')->take(3)->get();
        $newproduct=Product::orderBy('created_at', 'desc')->take(3)->get();
        $randomproduct=Product::InRandomOrder()->take(3)->get();
        $categories = Category::all();
        // $countOfProductCategory = $categories->products()->get();
        // dd($categories);
        return view('Theme2.main.content.homepage')->with([
            'product'=>$product,
            'allCategories'=> $categories,
            'topseller'=>$topseller,
            'newproduct'=>$newproduct,
            'randomproduct'=>$randomproduct,

        ]);
    }
}
