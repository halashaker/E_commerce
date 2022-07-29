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
<<<<<<< HEAD

//ProductController api's
Route::get('/products', 'ProductController@index');
Route::get('/products/{id}', 'ProductController@show');
Route::post('/products/store', 'ProductController@store');
Route::post('/products/update/{id}', 'ProductController@update');
Route::post('/products/delete/{id}', 'ProductController@delete');
=======
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





>>>>>>> 2e0593974729e0403b6cdee9d2389a14b7a52f81
