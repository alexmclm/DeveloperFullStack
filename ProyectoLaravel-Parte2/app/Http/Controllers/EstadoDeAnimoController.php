<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\EstadoAnimo; //para que haga referencia a la clase EstadoAnimo del Model
//los controladores donde iria el moldeo de la pagina y todo l oque conlleva, el muestreo
//el recorrido, tipo como css, pero que admite funciones, al estilo JAVAFX
class EstadoDeAnimoController extends Controller
{
    /*
		esto que escribi en el controller, se hara visible con la funcion que esta en web.php
		mediante la funcion Router::get ...etc
    */

    public function index(){ // regresa el estadoDeAnimo
    	//como el usuario ingresa informacion a esto?
    	return EstadoAnimo::all();
    }

    public function create(){

    }
    public function hola(){
    	return "hola mundo";
    }
    /*
    //el usuario cuando ingrese la url/EstadoAnimo , que regrese un listado
    //entonces debemos hacer un metodo para que lo haga
    */
    public function listar(){
    	//buscamos todos los estados de animos y lo retornaremos
    	//class EstadoAnimo -model+-
    	return EstadoAnimo::all();
    }

    public function obtenerUno($id){
    return EstadoAnimo::find($id);

    }
    // DAR DE ALTA EN ESTE CASO EN ESTADO DE ANIMO
    	//
    public function agregar(Request $request){
    	//$request, todos los datos que envio el usuario en ESTADOANIMO
    	/*

    	*/
    	$obj= new EstadoAnimo();
    	$obj->estadoDeAnimo = $request->estadoDeAnimo;
    	$obj->save();
    	return $obj;
    	//una vez que se guarda , se retorna el objeto guardado, para que facilitar con el tema de los ID

    }

}
