<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
        echo('teste');
        die();
	return View::make('hello');
});

Route::get('captura/index', array('as' => 'captura.index', 'uses' => 'CapturaController@index'));
Route::post('captura/index', array('as' => 'captura.index', 'uses' => 'CapturaController@index'));