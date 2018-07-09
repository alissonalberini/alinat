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
    return view('home', ['produtos' => ['oi','oioi']]);
});

Route::get('/pay', 'AddMoneyController@payWithStripe');
Route::get('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));

//Routes with resources, used in the creation of the Model with migration and control

Route::resource('cards','CardController');

Route::resource('carts','CartController');

Route::resource('categoryes','CategoryController');

Route::resource('clients','ClientController');

Route::resource('company','CompanyController');

Route::resource('products','ProductController');