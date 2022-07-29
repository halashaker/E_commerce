<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();


});
Route::get('/categories','CategoryController@index');
Route::get('/categories/{id}','CategoryController@show');
Route::post('/categories/store','CategoryController@store');
Route::post('/categories/update/{id}','CategoryController@update');
Route::post('/categories/delete/{id}','CategoryController@delete');

Route::get('/products/in_category/{id}','ProductController@show_by_category');
Route::post('/products/date/','ProductController@show_by_date');
Route::get('/product/csv/','ProductController@Export_into_exel');
Route::get('/detail/csv/','OrderController@Export_into_exel');
Route::get('/order/csv/','Order_detailController@Export_into_exel');

Route::post('/order/store','Order_detailController@store');
Route::get('/order/next','OrderController@return_next_order');
Route::post('/product/vote/','ProductController@vote');





