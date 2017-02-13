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
    return view('client.index');
});

Route::get('/dashboard','DashboardController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');

// route untuk password
Route::get('/change-password', 'PasswordController@changePassword');
Route::put('/change-password','PasswordController@updatePassword');

//route untuk kategori
Route::resource('category-product', 'CategoriesController');
//route untuk produk
Route::resource('product', 'ProductsController');

Route::get('/banner-product',function(){
	return view('auth.banner.index');
});

Route::get('/contact-product',function(){
	return view('auth.contact.index');
});

Route::get('/askandanswer-product',function(){
	return view('auth.AandA.index');
});
