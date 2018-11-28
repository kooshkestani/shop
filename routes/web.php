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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::group(['namespace' => 'Voyager'],function() {
//    route::get('/test', 'testController@frontIndex');
//});

    //Route::get('/aaa', function () {
//    return view('front-end.home.index');
//});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/shop', 'shopController@index')->name('shop.index');
Route::get('/shop/{product}', 'shopController@show')->name('shop.show');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::post('/cart', 'CartController@store')->name('cart.store');
Route::post('/cart/{product}', 'CartController@destroy')->name('cart.destroy');


Route::get('empty', function () {
    Cart::destroy();

});