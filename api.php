<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/*
	cuando trabajamos con los datos sin un contorno y queiro que devuelva solamente datos 
	va por aca, sino en web.php
	con la web.php es para trabajar cuando queremos que retorne un html
*/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get("/EstadoAnimo","EstadoDeAnimoController@listar");
//alta chotada este regresar la id particular 
Route::get("/EstadoAnimo/{id}","EstadoDeAnimoController@obtenerUno");


//convencion para *agregar* un ESTADODEANIMO
//post: para AGREGAR!
Route::post("/EstadoAnimo","EstadoDeAnimoController@agregar");


Route::get("/posteos/{id}","PosteoController@obtenerUno");