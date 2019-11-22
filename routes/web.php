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
Route::get('/shopping/{cate1}/{cate2?}', 'HomeController@shopping')->name('shopping');
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
Route::post('/products/add/cart', 'ProductController@addToCart')->middleware('auth')->name('product.add.cart');

Route::resource('reviews', 'ReviewController');
Route::get('/cart', 'Site\CartController@getCart')->name('checkout.cart');
Route::get('/cart/quick-add/{id}', 'Site\CartController@getQuickFormAddToCart')->middleware('auth')->name('cart.quick-add');
Route::get('/cart/item/{id}/remove', 'Site\CartController@removeItem')->name('checkout.cart.remove');
Route::get('/cart/clear', 'Site\CartController@clearCart')->name('checkout.cart.clear');



Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', 'AdminController@index')->name('dashboard');
    Route::delete('users/', 'UserController@multiDelete')->name('users.multiDelete');
    Route::resource('users', 'UserController')->names([
        'index' => 'users',
        'create' => 'users.create',
        'store' => 'users.store',
        'show' => 'users.show',
        'edit' => 'users.edit',
        'update' => 'users.update',
        'destroy' => 'user.destroy'
    ]);
    Route::get('/shops', 'AdminController@index')->name('shops');
    Route::get('/categories', 'AdminController@index')->name('categories');
    Route::get('/my-profile', 'AdminController@index')->name('myProfile');
});
