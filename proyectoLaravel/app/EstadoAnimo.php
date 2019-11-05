<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoAnimo extends Model
{
	/*
	*/
    protected $table ="
    	estadoanimo"; // seria el nombre de la tabla que estara protegido
    public $timestamps = false;	// te marca el tiempo d ecuando se creo el registro, pero ocmo no se usa ahora , es falso
    		
}

$obj = new EstadoAnimo();
$obj->estadoDeAnimo = 'Feliz';
$obj->save(); // el save, es funcion del model por eso existe y lo puedo usar
// si quiero traer todos los estados de animo ...........
$listado = EstadoAnimo::all();