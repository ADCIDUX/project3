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

//Route::get('/', function () {
//    return view('welcome');
//});
//
//
//Route::get('/category/add', function () {
//    return 'i am in category add';
//});
//
//
//
//Route::get('/category/view', function () {
//    return view('view');
//});


Route::get('/','WelcomeController@index');