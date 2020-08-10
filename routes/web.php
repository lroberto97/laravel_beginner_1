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
    return view('welcome');
});

/*As second parameter we pass the ControllerName@functionOfController*/ 
/* Route::get('/about', 'HelloController@about');
Route::get('/services', 'HelloController@services'); */
/* If we're passing just a view in the controller, we can do it directly from the route using
the shortcut view, and as a second parameter the view we want */
Route::view('/about', 'about');
Route::view('/services', 'services');