<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    protected $table = "posteo";
    public $timestamps = false;	
}
//$obj = new Posteo();
/*
	Forma crota de guardar en la BBDD
	$obj->estadoDeAnimo = "#Dsfdas";
	$obj->save();
*/
//modificar de la tabla
//$obj=EstadoAnimo::find(5);	 // busco en la id = 5 de la base de datos
	/*
$obj->post = "hacer que esto guarde en la BBDD";
$obj->estadoAnimo_id = 2;
$obj->save();
*/