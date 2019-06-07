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






// backend
Route::get('/logout', 'SuperAdminController@logout');
Route::get('/admin','AdminController@index' );
Route::get('/dashboard','AdminController@show_dashboard' );
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

