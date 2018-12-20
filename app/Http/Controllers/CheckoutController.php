<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Models\Address;
use App\User;
use App\Models\Category;

use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use Illuminate\Support\Facades\Redirect;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $allProductOfUser = Cart::content();  
         //Check if Basket is Empty
        if ($allProductOfUser->count() == 0) {
            return redirect('/shop');
        }      
        $userLoggedId = Auth::user()->id;
        //User Informations
        $userInfo = User::find($userLoggedId);
        //Check if User unPaid order
        $checkBasketUnpaid = Order::where([
            ['user_id', '=', $userLoggedId],
            ['status', '=' , 2 ],

        ])->count();
        
        //Insert New Order Of User if Basket is empty
        
            $orderInsert = Order::create([
                'user_id' => $userLoggedId,
                'total' => Cart::total(0, "", ""),
                'status' => 2
            ]);
            foreach ($allProductOfUser as $product) {
                $orderInsert->products()->attach(
                    $orderInsert,
                    [
                        'product_id' => $product->id,
                        'quantity' => $product->qty,
                        'total' => $product->qty * $product->price
                    ]
                );
            }
        
        
        

        return view('Theme2.main.content.checkout-page')->with([
            'userInfo'=>$userInfo,
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
dd('Api IdPay.ir coming soon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
