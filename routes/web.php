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