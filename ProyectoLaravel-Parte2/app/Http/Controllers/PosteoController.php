<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posteo;

//los controladores donde iria el moldeo de la pagina y todo l oque conlleva, el muestreo
//el recorrido, tipo como css, pero que admite funciones, al estilo JAVAFX
class PosteoController extends Controller
{
        public function index(){ // regresa el estadoDeAnimo
    	//como el usuario ingresa informacion a esto?
    	return Posteo::all();
    }
     public function obtenerUno($id){
    return Posteo::find($id);

    }

}
