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
Route::get('/alertes/destroy_all','LogsController@destroy_all');
Route::get('/alertes', 'LogsController@alerts');
Route::get('/alertes/{id}', ['uses'=>'LogsController@alerts_repetidor']);
Route::resource('logs','LogsController');
Route::get('/alertes/destroy_repetidor/{id}', ['uses'=>'LogsController@destroy_repetidor']);





