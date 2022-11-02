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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'App\Http\Controllers\clientController@index');
Route::get('/create_client', 'App\Http\Controllers\clientController@create');
Route::post('/store_client', 'App\Http\Controllers\clientController@store')->name('store_client');
Route::post('/store_talk_to_us', 'App\Http\Controllers\talkController@store')->name('store_talk_to_us');

// CMS
Route::get('/adminDashboard', 'App\Http\Controllers\clientController@show');
Route::get('/delete_client/{id}', 'App\Http\Controllers\clientController@delete')->name('delete_client');
