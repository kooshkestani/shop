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
        $userLoggedId = Auth::user()->id;
        $userInfo = User::find($userLoggedId);
        $allProductOfUser = $this->checkNewProductCart();
        // dd(Cart::content(), "same");

        if($allProductOfUser){
            $categories = Category::all();
            return view('Theme2.main.content.checkout-page')->with([
                'userInfo' => $userInfo,
                'allCategories' => $categories,
            ]);
        }else{
            return redirect('/shop');             
        }
        
    }

    public function checkNewProductCart(){

        $allProductOfUserInCart = Cart::content(); 
        // dd($allProductOfUserInCart); 
         //Check if Basket is Empty then redirect to Shop Page
        if ($allProductOfUserInCart->count() == 0) {
            return false;
        }else{
            $userLoggedId = Auth::user()->id;
             //User Informations
            $userInfo = User::find($userLoggedId);
            //Check User unPaid order status
            $checkBasketUnpaid = Order::where([
                ['user_id', '=', $userLoggedId],
                ['status', '=', 2]
            ]); 
            // dd($checkBasketUnpaid->count());
            //Check if user unpaid basket Exist
            if($checkBasketUnpaid->count()==0){
                //Insert New Order Of User to baasket   
                $orderInsert = Order::create([
                    'user_id' => $userLoggedId,
                    'total' => Cart::total(0, "", ""),
                    'status' => 2
                ]);
                //Fill order_product Table with all product of session order
                foreach ($allProductOfUserInCart as $product) {
                    $orderInsert->products()->attach(
                        $orderInsert,
                        [
                            'product_id' => $product->id,
                            'quantity' => $product->qty,
                            'total' => $product->qty * $product->price
                        ]
                    );
                }
            }else{
                //Testing Query
                    // $order = Order::find(1);
                    // foreach ($order->products as $pro) {
                    //     dd($pro->pivot->total);
                    // }
                    //$checkBasketUnpaid->first()->products()->first()->pivot->user_id ==> retrieve field of intermediate table
                    // dd($checkBasketUnpaid->first()->products()->first()->id);
                    // $orderIdOfCurrentUser = $checkBasketUnpaid->first()->id;
                //Order Of User logged in
                $orderId = $checkBasketUnpaid->first();
                // dd($orderId);
                $allProductsOfOrder = $checkBasketUnpaid->first()->products()->where('order_id', $orderId->id)->get();
                // dd($allProductsOfOrder);
                // dd($allProductOfUserInCart);
                //Check current session orders with db orders
                foreach($allProductOfUserInCart as $cardItem){
                    //New Order Exist
                    $newOrder = 0;
                    //Check if Session order equal db order
                    foreach ($allProductsOfOrder as $productItem) {
                        //If session order equal database order
                        if($cardItem->id == $productItem->id){
                            // dd($cardItem->id == $productItem->id);
                            $newOrder++;
                            // dd(Cart::content(), "New", $newOrder);
                            // dd($newOrder);
                            //If Quantity of session order not equal db order
                            if($cardItem->qty != $productItem->pivot->quantity){
                                // dd($cardItem->qty,"different");
                                if ($cardItem->qty > $productItem->pivot->quantity) {
                                    $orderId->products()->updateExistingPivot($productItem->id, ['quantity' => $cardItem->qty]);
                                    $updateQuantity = $cardItem->qty;
                                } elseif ($cardItem->qty < $productItem->pivot->quantity) {
                                    $orderId->products()->updateExistingPivot($productItem->id, ['quantity' => $productItem->pivot->quantity - $cardItem->qty]);
                                    $updateQuantity = $productItem->pivot->quantity - $cardItem->qty;
                                }
                                // $updateQuantity = $productItem->pivot->quantity + $cardItem->qty;
                                //Update Order Table.Change Total Cost of Order
                                Cart::update($cardItem->rowId, $updateQuantity);     
                                $orderId->total = Cart::total(0, "", "");
                                $orderId->save();
                                // dd(Cart::content(),"different");
                            }
                            // dd(Cart::content(), "same");

                            //Testing
                                // dd($productItem->order()->sync([$orderIdOfCurrentUser => ['quantity' => $updateQuantity]]));
                                // $productItem->pivot->quantity = $updateQuantity;
                                // $productItem->pivot->save();
                                // $result = $productItem->order()->updateExistingPivot($orderIdOfCurrentUser,array('quantity' => $updateQuantity));
                                //If New Order In SessionOrder    
                        }
                    }
                    if ($newOrder == 0) {
                        // Cart::add($cardItem->id, $cardItem->name, $cardItem->qty, $cardItem->total(0,"",""));                        
                        //Update Order Table.Change Total Cost of Order
                        $orderId->total = Cart::total(0, "", "");
                        $orderId->save();
                        //Update order_product Table with new order
                            $orderId->products()->attach(
                            $orderId,
                            [
                                'product_id' => $cardItem->id,
                                'quantity' => $cardItem->qty,
                                'total' => $cardItem->qty * $cardItem->price
                            ]);
                    }
                }
            }
            // redirect('/shop');
            return true;
        }
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
