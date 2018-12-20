<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Gloudemans\Shoppingcart\Facades\Cart;

//Route::get('/aaa', function () {
//    return view('Theme2.homepage.homepage');
//});

//Route::group(['namespace' => 'Voyager'],function() {
//    route::get('/test', 'testController@frontIndex');
//});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


//TODO themeplate 1 routing
// Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/', 'HomeController@index')->name('home');
//Route::get('/shop', 'shopController@index')->name('shop.index');
//Route::get('/shop/{product}', 'shopController@show')->name('shop.show');
//Route::get('/cart', 'CartController@index')->name('cart.index');
//Route::post('/cart', 'CartController@store')->name('cart.store');
//Route::post('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
//Route::get('empty', function () {
//    Cart::destroy();
//
//});
Route::get('/home', 'HomeController@index')->name('home');

//TODO themeplate 2 routing

//TODO route basic
Route::get('/', 'LandingPageController@index')->name('landing-page');





//TODO route shop and product
Route::get('/shop', 'shopController@index')->name('shop.index');
Route::get('/shop/{product}', 'shopController@show')->name('shop.show');





//TODO route cart
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
//Route::post('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::delete('/cart/{product}', 'CartController@destroy')->name('cart.destroy');
Route::patch('/cart/{product}', 'CartController@update')->name('cart.update');




//TODO route comment
Route::post('/shop/{product}/comment', 'CommentController@store')->name('comment.store');


Route::get('/thankyou', 'ConfirmController@index')->name('Confirm.index');






//TODO route search
Route::get('/search', 'shopController@search')->name('search');
Route::get('/search-algolia', 'shopController@searchAlgolia')->name('search-algolia');





//TODO route my-profile
Route::middleware('auth')->group(function () {
    Route::prefix('my-profile')->group(function () {
        Route::get('/profile', 'UsersController@edit')->name('users.profile');
        Route::patch('/profile', 'UsersController@update')->name('users.update');

        Route::get('/my-order', 'UserOrderController@index')->name('order.index');

        Route::get('/comment', 'UsersController@index')->name('users.comment');
        Route::get('/address', 'UsersController@addresindex')->name('users.address');

    });
<<<<<<< HEAD
<<<<<<< HEAD

//TODO route checkout
=======
    //TODO route checkout
>>>>>>> shop/behrouz
=======





//TODO route checkout
>>>>>>> shop/behrouz

    Route::get('/checkout', 'CheckoutController@index')->name('checkout.index');
    Route::post('/checkout', 'CheckoutController@store')->name('checkout.store');




//TODO quest Checkout
    Route::get('/guestCheckout', 'CheckoutController@index')->name('guestCheckout.index');

//TODO route checkout
});


Route::get('empty', function () {
    Cart::destroy();

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
