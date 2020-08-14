<?php

//use App\Mail\WelcomeMail;
//use Illuminate\Support\Facades\Mail;
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
/* Route::get('/email', function () {
    //Enviamos un nuevo email a la cuenta email@email.com desde nuestra cuenta
    //de mailtrap que configuramos en el .env
    Mail::to('email40@email.com')->send(new WelcomeMail());
    return new WelcomeMail();
}); */

/*As second parameter we pass the ControllerName@functionOfController*/
Route::get('/about', 'HelloController@about');

Route::get('/service', 'ServiceController@index');
Route::post('/service', 'ServiceController@store');

/* group´receive as a first parameter the groups is gonna use
in this case prefix which is gonna insert 'customers' at the beginning of
every route so we do'nt need to write it in every one and name which is
gonna insert 'customers.' at the beginning of every route name*/
Route::group([
    'prefix' => 'customers',
    'name' => 'customers.'
    ],
    function(){
        Route::get('/', 'CustomerController@index')->name('index');
        Route::get('/create', 'CustomerController@create')->name('create');
        Route::post('/', 'CustomerController@store')->name('store');
        /* Sending parameters in url */
        Route::get('/{customer}', 'CustomerController@show')->name('show');
        Route::get('/{customer}/edit', 'CustomerController@edit')->name('edit');
        Route::patch('/{customer}', 'CustomerController@update')->name('update');
        Route::delete('/{customer}', 'CustomerController@destroy')->name('destroy');
});

