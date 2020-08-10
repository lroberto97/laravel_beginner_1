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

Route::get('/hello', function(){
    $variable = 'Hello from Routes AGAIN';
    
    /*view() accept a second parameter, which is the data we're gonna pass to our view
    into an array*/
    return view('subviews.hello', [
        'someData' => $variable
    ]);
});