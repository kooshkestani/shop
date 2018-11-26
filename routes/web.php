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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::group(['namespace' => 'Voyager'],function(){
    route::get('/test', 'testController@frontIndex');
=======
Route::get('/aaa', function () {
    return view('front-end.home.index');
>>>>>>> 20cf36b19e061d5d57458d9901d5d4733f3c2a0c
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
