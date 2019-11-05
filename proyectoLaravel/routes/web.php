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
	

*/
Route::get('/', function () {
    return view('welcome');
});

	//localizacion del EstadoAnimo.php ** controladorDelEstadoAnimo @ index 
// el @ llama a la funcion dentro de este controller , y subsiguiente es la funcion
Route::get("/EstadoAnimo","EstadoDeAnimoController@index");