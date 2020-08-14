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
every route so we do'nt need to write it in every one and 'as' which is
gonna insert 'customers.' at the beginning of every route name it only
works with 'as' in Route::group it does not works with name,
name only works in groups if is Route::name, but we can't add another
attribute like prefix */
/*Route::group([
    'prefix' => 'customers',
    'as' => 'customers.'
    ],
    function(){
        Route::get('/', ['as'=>'index', 'uses' => 'CustomerController@index']);
        Route::get('/create', ['as'=>'create', 'uses' => 'CustomerController@create']);
        Route::post('/', ['as'=>'store', 'uses' => 'CustomerController@store']);
        //Sending parameters in url
        Route::get('/{customer}', ['as'=>'show', 'uses' => 'CustomerController@show']);
        Route::get('/{customer}/edit', ['as'=>'edit', 'uses' => 'CustomerController@edit']);
        Route::patch('/{customer}', ['as'=>'update', 'uses' => 'CustomerController@update']);
        Route::delete('/{customer}', ['as'=>'destroy', 'uses' => 'CustomerController@destroy']);
});*/

//Second way to do it
Route::prefix('customers')->group(
    function(){
        Route::get('/', 'CustomerController@index')->name('customers.index');
        Route::get('/create', 'CustomerController@create')->name('customers.create');
        Route::post('/', 'CustomerController@store')->name('customers.store');
        /* Sending parameters in url */
        Route::get('/{customer}', 'CustomerController@show')->name('customers.show');
        Route::get('/{customer}/edit', 'CustomerController@edit')->name('customers.edit');
        Route::patch('/{customer}', 'CustomerController@update')->name('customers.update');
        Route::delete('/{customer}', 'CustomerController@destroy')->name('customers.destroy');
});
