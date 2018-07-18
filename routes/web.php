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

//Exclusive routes for visitors and customers.

Route::get('/','HomeController@index');
Route::get('/detalhes/{id}','HomeController@detail');
Route::get('/addcart/{id}','HomeController@addProductCart');
Route::get('/remcart/{id}','HomeController@removeProductCart');
/*
    To view
    Filter
    Add products to the cart;
    To compare,
*/

//Exclusive routes for authenticated customers

/*
    Finalize purchase, 
    register cards, 
    add address
*/  

Route::get('/pay', 'AddMoneyController@payWithStripe');
Route::get('addmoney/stripe', array('as' => 'addmoney.stripe','uses' => 'AddMoneyController@postPaymentWithStripe'));

//Routes with resources, used in the creation of the Model with migration and control

//Exclusive routes for business administrators

Route::get('/admin','AdminController@index');

Route::resource('cards','CardController');

Route::resource('carts','CartController');

Route::resource('categoryes','CategoryController');

Route::resource('clients','ClientController');

Route::resource('company','CompanyController');

Route::resource('products','ProductController');