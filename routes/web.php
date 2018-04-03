<?php

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


/*
	podemos crear rutas de tipo:
	GET, POST, PUT, DELETE ETC..
 */


Route::get('/', function () {
    return view('welcome');
});


// un grupo de rutas se declara asi
Route::group(['prefix' => 'admin'], function(){
	//aplicamos la funcion 'Resources'
	Route::resource('users', 'UsersController');
	Route::get('users/{id}/destroy', [
		//definimos el controlador q va a usar
		'uses' => 'UsersController@destroy',
		//le asignamos una ruta
		'as' => 'users.destroy'
	]);
});

