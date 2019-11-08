<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EstadoAnimo extends Model
{
	/*
	con esttos model debo relaciona con la base de datos
	*/
    protected $table ="estadoanimo"; // seria el nombre de la tabla de BBDD (que estara protegido)
    //osea BBDD: diariointimo , tabla estadoanimo


    public $timestamps = false;	// te marca el tiempo d ecuando se creo el registro, pero ocmo no se usa ahora , es falso
    //cuando creamos un model. osea instnaciamos esta clase EstadoAnimo
    //si no instanciamos timestamps ....lo que hara laravel ante entradas de informacion por el usuario
    //intentara hacer: 
    /*
    	hacre un obb->create_at = fechaActual; ---y este create_at es de la BBDD y como no lo tenemos esos campos en la BBDD 
    	ponemos timestamps = false;
    */
    	/*
			para usar un model, se necesita un CONTROLLER para administrar nuestro ESTADOS DE ANIMOS
			y tendremos un Controller por cada model

    	*/


}
/*
$obj = new EstadoAnimo();
$obj->estadoDeAnimo = 'Feliz';
$obj->save(); // el save, es funcion del model por eso existe y lo puedo usar
// si quiero traer todos los estados de animo ...........
$listado = EstadoAnimo::all();
*/
//$listado = EstadoAnimo::all();
//crear un nuevo estado de animo
$obj = new EstadoAnimo();
/*
	Forma crota de guardar en la BBDD
	$obj->estadoDeAnimo = "#Dsfdas";
	$obj->save();
*/
//modificar de la tabla
//$obj=EstadoAnimo::find(5);	 // busco en la id = 5 de la base de datos
$obj->estadoDeAnimo = "estadoModificado";
$obj->save();
/*
//borrar de la tabla
$obj = estadoDeAnimo::find(6);
$obj->delete();
*/