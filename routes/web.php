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

Route::get('/', function () {
    return view('index');
});

//HERVENT
Route::get('/hervent', 'HerventsController@index');
Route::get('/hervent/create', 'HerventsController@create');
Route::post('/hervent', 'HerventsController@store');
Route::get('/hervent/{hervent}', 'HerventsController@show');
Route::get('/hervent2/{hervent}', 'HerventsController@show2');
Route::delete('/hervent/{hervent}', 'HerventsController@destroy');
Route::get('hervent/{hervent}/edit', 'HerventsController@edit');
Route::patch('hervent/{hervent}', 'HerventsController@update');

Route::post('/download_invoice/{id}', 'HerventsController@invoice')->name('printInvoice');
//........
