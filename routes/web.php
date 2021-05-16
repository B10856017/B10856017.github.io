<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', 'PageController@index')->middleware('userAuth');
Route::get('/profile', 'PageController@profile')->middleware('userAuth');
Route::get('/order', 'PageController@order')->middleware('userAuth');
Route::get('/address', 'PageController@address')->middleware('userAuth');
Route::get('/payment', 'PageController@payment')->middleware('userAuth');
Route::get('/coupon', 'PageController@coupon')->middleware('userAuth');
Route::get('/customerService', 'PageController@customerService')->middleware('userAuth');
Route::get('/register', function () {
    return view('register');
});

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::get('login', 'UserController@showLoginPage');
Route::get('logout', 'UserController@logout');