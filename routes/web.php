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
Route::get('/transaction/create/{id}', 'TransactionController@create');
Route::get('/transaction/{id}','TransactionController@index');
Route::post('/transaction/{payee}/c','TransactionController@store');

Auth::routes();


Route::get('/','PayeeController@index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/payee/create', 'PayeeController@create')->name('payee.create');
Route::post('/p','PayeeController@store');
Route::post('/transaction','TransactionController@store');
