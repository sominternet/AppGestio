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

Route::get('/',  'PagesController@index' );
Route::get('/repetidors_log', 'RepetidorsController@index2');

Route::resource('repetidors','RepetidorsController');
Route::get('/repetidors_log/{id}', ['uses' =>'repetidors_routers_controller@index']);
Route::get('/repetidors_log/{id}/{id_routers}', ['uses' =>'log_master_controller@index']);


