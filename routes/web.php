<?php

use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
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
/* Returning a mailable class, this return the mail view in the route defined */
Route::get('/email', function () {
    /* Enviamos un nuevo email a la cuenta email@email.com desde nuestra cuenta
    de mailtrap que configuramos en el .env */
    Mail::to('email40@email.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

/*As second parameter we pass the ControllerName@functionOfController*/
Route::get('/about', 'HelloController@about');

Route::get('/service', 'ServiceController@index');
Route::post('/service', 'ServiceController@store');

Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers', 'CustomerController@store');
/* Sending parameters in url */
Route::get('/customers/{customer}', 'CustomerController@show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit');
Route::patch('/customers/{customer}', 'CustomerController@update');
Route::delete('/customers/{customer}', 'CustomerController@destroy');
