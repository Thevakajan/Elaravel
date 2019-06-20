<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create somethinggreat!
|
*/

Route::get('/','HomeController@index' );
//show category wise product here
Route::get('/product_by_category/{category_id}','HomeController@show_product_by_category' );
Route::get('/product_by_manufacture/{manufacture_id}','HomeController@show_product_by_manufacture' );
Route::get('/view_product/{product_id}','HomeController@product_details_by_id');
Route::post('/add-to-cart','CartControllerController@add_to_cart');
Route::get('/show-cart','CartControllerController@show_cart');
Route::get('/delete-to-cart/{rowId}','CartControllerController@delete_cart');
Route::post('/update-cart','CartControllerController@update_cart');
// backend
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin','AdminController@index' );
Route::get('/dashboard','SuperAdminController@index' );
Route::post('/admin-dashboard', 'AdminController@dashboard');
//category route
Route::get('/add-category', 'CategoryController@index');
Route::get('/all-category', 'CategoryController@all_category');//deactive_category
Route::post('/save-category', 'CategoryController@save_category');
Route::get('/edit-category/{category_id}', 'CategoryController@edit_category');
Route::post('/update-category/{category_id}', 'CategoryController@update_category');
Route::get('/delete-category/{category_id}', 'CategoryController@delete_category');
Route::get('/deactive_category/{category_id}','CategoryController@deactive_category');
Route::get('/active_category/{category_id}','CategoryController@active_category');

///Add manufacture
Route::get('/add-manufacture', 'ManufactureController@index');
Route::post('/save-manufacture', 'ManufactureController@save_manufacture');
Route::get('/all-manufacture', 'ManufactureController@all_manufacture');
Route::get('/delete-manufacture/{manufacture_id}', 'ManufactureController@delete_manufacture');
Route::get('/deactive_manufacture/{manufacture_id}', 'ManufactureController@deactive_manufacture');
Route::get('/active_manufacture/{manufacture_id}', 'ManufactureController@active_manufacture');
Route::get('/edit-manufacture/{manufacture_id}', 'ManufactureController@edit_manufacture');
Route::post('/update-manufacture/{manufacture_id}', 'ManufactureController@update_manufacture');

//product route 
Route::get('/add-product', 'ProductController@index');
Route::get('/all-product', 'ProductController@all_product');
Route::get('/active_product/{product_id}', 'ProductController@active_product');
Route::post('/save-product', 'ProductController@save_product');
Route::get('/deactive_product/{product_id}', 'ProductController@deactive_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');

///slider route
Route::get('/add-slider', 'SliderController@index');
Route::post('/save-slider', 'SliderController@save_slider');
Route::get('/all-slider', 'SliderController@all_slider');
Route::get('/delete-slider/{slider_id}', 'SliderController@delete_slider');
Route::get('/deactive_slider/{slider_id}', 'SliderController@deactive_slider');
Route::get('/active_slider/{slider_id}', 'sliderController@active_slider');