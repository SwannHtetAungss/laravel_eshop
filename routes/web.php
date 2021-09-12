<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('frontend.home');
});


// CRUD Backend
Route::prefix('data-management')->middleware('auth','role:admin')->group(function(){
	Route::resource('brand','BrandController');
	Route::resource('category','CategoryController');
	Route::resource('subcategory','SubcategoryController');
	Route::resource('item','ItemController');	
});

Route::prefix('order-management')->middleware('auth','role:admin|customer')->group(function () {
	Route::resource('order','OrderController');
	// Route::post('order','OrderController');
});


// Frontend

Route::prefix('frontend')->group(function () {
  Route::get('home', 'FrontendController@home')->name('frontend.home');
  Route::get('shop', 'FrontendController@shop')->name('frontend.shop');
  Route::get('cart', 'FrontendController@cart')->name('frontend.cart');
  Route::get('item/{id}', 'FrontendController@detail')->name('frontend.detail');
  Route::post('category-filter', 'FrontendController@categoryFilter')->name('frontend.category-filter');
});

// Search
Route::post('/search','SearchController@search');


// Authentication
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
