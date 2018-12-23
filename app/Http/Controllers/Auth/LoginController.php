<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        session()->put('previousUrl' , url()->previous());
        return view('auth.login');
    }

    public function redirectTo(){

        $userLoggedId = Auth::user()->id;
        //User Informations
        $userInfo = User::find($userLoggedId);
        $checkBasketUnpaid = Order::where([
            ['user_id', '=', $userLoggedId],
            ['status', '=', 2]
        ]);
        //Check if user unpaid basket
        if ($checkBasketUnpaid->count() != 0) {
            $orderId = $checkBasketUnpaid->first();
            $allProductsOfOrder = $checkBasketUnpaid->first()->products()->where('order_id', $orderId->id)->get();

            foreach ($allProductsOfOrder as $productItem) {
                $price = str_replace(",", "", $productItem->price);
                Cart::add($productItem->id,$productItem->name, $productItem->pivot->quantity, $price)->associate('App\Models\Product');
            }
        }
        // dd(Cart::content());
        return str_replace(url('/'),'', session()->get('previousUrl'));
    }
}
