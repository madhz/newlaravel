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
    return view('User/registration');
});
Route::get('/register','User\UserRegistrationController@Show');
Route::post('/User/registration','User\UserRegistrationController@Create');
Route::get('/login','User\UserLoginController@show');
Route::post('/User/login','User\UserLoginController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


// route for view/blade file
Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
// route for post request
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
// route for check status responce
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));