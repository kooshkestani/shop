<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
        //dlkjdlkjslkjslk
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::InRandomOrder()->take(6)->get();
        $topseller=Product::orderBy('price', 'desc')->take(3)->get();
        $newproduct=Product::orderBy('created_at', 'desc')->take(3)->get();
        $randomproduct=Product::InRandomOrder()->take(3)->get();
        return view('Theme2.homepage.homepage')->with([
            'product'=>$product,
            'topseller'=>$topseller,
            'newproduct'=>$newproduct,
            'randomproduct'=>$randomproduct,

        ]);
    }
}
