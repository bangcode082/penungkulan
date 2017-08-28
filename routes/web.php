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


Route::get('/',function(){
	return view('cppenungkulan.index');
});

Route::get('/about',function(){
	return view('cppenungkulan.tentang');
});

Route::get('/bidang',function(){
	return view('cppenungkulan.bidang');
});

Route::get('/infrastruktur',function(){
	return view('cppenungkulan.infrastruktur');
});

Route::get('/store', 'CatalogsController@index');

Route::get('/catalogs','CatalogsController@index');

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

Route::resource('contact-product', 'ContactController');

Route::get('/banner-product','ProductsController@banner');

Route::resource('/askandanswer-product','MessageController');

Route::get('/details/{id}','CatalogsController@detail');

Route::post('message-create','CatalogsController@message');
