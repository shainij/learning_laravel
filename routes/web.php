<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TodoController@home');

Route::post('/store', 'TodoController@store')-> name('store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/update/{id}', 'TodoController@update')->name('update');
Route::post('/edit/{id}', 'TodoController@edit')->name('edit');//edit database
Route::post('/delete/{id}', 'TodoController@delete')->name('delete');