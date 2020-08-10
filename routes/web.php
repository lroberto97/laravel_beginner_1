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
    $coolString = 'Hello from Routes AGAIN';
    
    /*view() accept a second parameter, which is the data we're gonna pass to our view.
    If the variable's name is the same as the name in the array, we can use the function 
    compact() as a shortcut, and this will generate the exact same array as we had before*/
    return view('subviews.hello', compact('coolString'));
});