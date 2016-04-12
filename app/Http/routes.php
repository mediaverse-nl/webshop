<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => '/',
    'uses' => 'pagesController@getIndex'
]);

Route::get('inloggen', [
    'as' => 'inloggen',
    'uses' => 'pagesController@getLogin'
]);

Route::resource('product', 'ProductController');


Route::auth();

Route::get('/home', 'HomeController@index');
