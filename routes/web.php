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
  $url = 'http://shaikram.epizy.com/?i=1';
      return Redirect::to($url);
    // return view('welcome');
});
Route::get('snake', 'App\Http\Controllers\snakeController@index');
Route::get('weather', 'App\Http\Controllers\snakeController@weather');
Route::get('calculator', 'App\Http\Controllers\snakeController@calculator');
