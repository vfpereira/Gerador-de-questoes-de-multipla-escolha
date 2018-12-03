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

Route::get('/', ['uses' => 'LoginController@index']);
Route::post('formSubmit','LoginController@formSubmit');
Route::post('formSubmitRegister','LoginController@formSubmitRegister');