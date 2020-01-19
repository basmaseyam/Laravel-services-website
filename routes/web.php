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

Route::namespace('FrontEnd')->group(function(){
    Route::get('/', 'HomeController@index');
    Route::get('/about', 'HomeController@about');
    Route::get('/contact', 'HomeController@contact');
    Route::get('/softwaretools', 'HomeController@servicest');
    Route::get('/ibmservice', 'HomeController@serviceibm');
});

Route::namespace('BackEnd')->prefix('admin')->group(function(){
    Route::get('/','HomeController@index');
});



