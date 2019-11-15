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
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/search', 'SearchController@index')->name('search');
Route::get('/cate1/{id}','HomeController@listCate1');


Route::get('/my-account','MyAccountController@index')->middleware('auth')->name('myAccount');
Route::get('/my-profile','MyAccountController@profile')->middleware('auth')->name('myProfile');
Route::get('/my-order','MyAccountController@order')->middleware('auth')->name('myOrders');
Route::post('/my-profile','MyAccountController@changeProfile')->middleware('auth');
Route::get('/get-districts','MyAccountController@listDistrictsOfProvince')->middleware('auth');
Route::get('/get-wards','MyAccountController@listWardsOfProvince')->middleware('auth');
Route::get('/my-shop','MyShopController@index')->middleware('auth')->name('myShop');
Route::resource('products', 'ProductController');

//Route::group(['middleware' => 'isAdmin'], function () {
//    Route::get('admin', 'adminController@adminDashboard');
//});
