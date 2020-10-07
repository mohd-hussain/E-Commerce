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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
// Route::get('/','Main\MainController@index')->name('Main.index');

// Route::get('/dashboard', function(){ 
//     return view('Admin.dashboard');
// });

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth','admin']], function() {
    // Route::get('/dashboard', function(){ 
    //     return view('Admin.dashboard');
    // });
    Route::get('/dashboard','Admin\DashboardController@index');

    Route::get('/users-all','Admin\UserController@index');
    Route::get('/edit-user/{id}','Admin\UserController@editUser');
    Route::put('/update-user/{id}','Admin\UserController@updateUser');
    Route::delete('/delete-user/{id}','Admin\UserController@deleteUser');

    Route::get('/products-all','Admin\ProductController@index');
    Route::post('/store-product','Admin\ProductController@store');
    Route::get('/edit-product/{id}','Admin\ProductController@edit');
    Route::put('/update-product/{id}','Admin\ProductController@update');
    Route::delete('/delete-product/{id}','Admin\ProductController@destroy');

    Route::get('/categories-all','Admin\CategoryController@index');
    Route::post('/store-category','Admin\CategoryController@store');
    Route::get('/edit-category/{id}','Admin\CategoryController@edit');
    Route::put('/update-category/{id}','Admin\CategoryController@update');
    Route::delete('/delete-category/{id}','Admin\CategoryController@deleteCategory');

    Route::get('/reviews-all','Admin\ReviewController@index');
    Route::post('/store-review','Admin\ReviewController@store');  
    Route::get('/edit-review/{id}','Admin\ReviewController@edit');
    Route::put('/update-review/{id}','Admin\ReviewController@update');
    Route::delete('/delete-review/{id}','Admin\ReviewController@destroy');    

});


//Main/MainController

Route::get('/shop','Main\MainController@index')->name('Main.index');
Route::get('/category/{id}','Main\MainController@categories');
Route::get('/contactUs','Main\MainController@contactUs');
Route::get('/vendor','Main\MainController@vendor');

Route::get('/login/show','Main\MainController@login')->name('login.show');
Route::post('/logins','Auth\LoginController@authenticate');

Route::get('/single-product/{id}','Main\MainController@singleProduct');

Route::get('/cart','Main\MainController@cart')->middleware('auth');

Route::post('addToCart/','Main\CartController@addToCart');
Route::get('updateCartQuantity/{id}/{quantity}','Main\CartController@updateCartQuantity'); 
Route::delete('/deleteFromCart/{id}/','Main\CartController@deleteFromCart');

Route::get('/accountInfo','Main\MainController@accountInfo');

Route::resource('/customer/register','Main\CustomerController@index');





// Main/ProductController

// Route::get('/products','Main\ProductController@index');






