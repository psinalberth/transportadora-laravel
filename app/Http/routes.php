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

/*Route::get('/', function () {
	return view('welcome');
	Route::get('/', ['uses' => 'WelcomeCotroller@index']);
});*/

Route::get('/', ['uses' => 'WelcomeController@index']);

Route::group(['prefix' => 'api'], function () {

	Route::group(['prefix' => 'clientes'], function () {

			Route::get('', ['uses' => 'ClientesController@index']);

			Route::post('', ['uses' => 'ClientesController@store']);

			Route::get('/{id}', ['uses' => 'ClientesController@editar']);

			Route::get('/teste', ['uses' => 'ClientesController@dummy']);

			Route::get('/aa', ['uses' => 'ClientesController@teste']);
		});
});