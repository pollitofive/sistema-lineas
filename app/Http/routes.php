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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

/*Route::get('cuentas',[
	'uses' => 'CuentasController@index',
	'as' => 'cuentas.index'
	]);*/

Route::resource('cuentas','CuentasController');

Route::get('cuentas-create',[
		'uses' => 'CuentasController@create',
		'as' => 'cuentas.create'
	]);

Route::get('/home', 'HomeController@index');


Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'v1'], function () {
        Route::resource('cuentas','Api\Mysql\CuentasController');

    });
});

/*
Route::resource('tipos_usuarios','Api\Mysql\TiposUsuariosController');
*/