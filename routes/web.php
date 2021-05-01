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
Auth::routes(['verify' => true]);

Route::redirect('/','/home');

Auth::routes();
Route::get('locale/{locale}', 'HomeController@changelocale')->name('locale');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/cart/{product}', 'Cart1@add')->name('cart')->middleware('auth');


    Route::get('/cart', 'Cart1@index')->name('cart.index')->middleware('auth');


    Route::get('/cart/destroy/{itemId}', 'Cart1@destroy')->name('cart.destroy')->middleware('auth');

    Route::get('/cart/update/{itemId}', 'Cart1@update')->name('cart.update')->middleware('auth');
    Route::get('/contact', 'EmailController@index1')->name('email1');;
    Route::post('/sendemail/send', 'EmailController@send')->name('email2');;
    Route::get('/cart/checkout', 'Cart1@checkout')->name('cart.checkout')->middleware('auth');




