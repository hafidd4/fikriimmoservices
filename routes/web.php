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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/','HomeController@index');
Route::get('/about','HomeController@about');
Route::get('/contact','HomeController@contact');
Route::get('/a_louer','HomeController@a_louer');
Route::get('/neuf','HomeController@neuf');
Route::get('/recherche','HomeController@recherche');
Route::view('/admin','layouts/admin/layout');