<?php 
// lo que se hara es crear la clase tarea y definir las propiedades que debe tener

class Tarea {
	private $id;
	public $tarea;
	public $fechaRealizada;
	public $fechaIngresada;
	public $estadoTarea;


//constructor, para darle estado inicial de las cosas!
	function __construct(){
		$this->estado = 0;
		$this->fechaIngresada = date("Y-m-d");
	}

	// una forma de evitar que tire errores cuando le pase los parametros en el __constructor()
	// es escribirle  $variable = null o $variable = ""
	/*
		ejemplo:
			function __construct($tarea,$fechaRealizada){} ...esto me obliga a escribir si o si 2 parametros cuando isntancio
		para evitarlo es:
			function __construct($tarea ="",fechaRealizada){} 
	*/ 






// set - get Tarea
public function setTarea($tarea){
	$this->tarea = $tarea;
}
public function getTarea(){
	return $this->tarea;
}
// set - get fechaRealizada
public function setFechaRealizada($fechaRealizada){
	$this->fechaRealizada = $fechaRealizada;
}
public function getFechaRealizada(){
	return $this->fechaRealizada;
}
public function setFechaIngresada($fechaIngresada){
	 $this->fechaIngresada = $fechaIngresada;
}
public function getFechaIngresada(){
	return $this->fechaIngresada;
}
// get - set tareaRealizada
// public function getTareaFinalizada(){
// 	return $this->tareaRealizada;
// }
public function setEstadoTarea($estadoTarea){
	$this->estadoTarea = $estadoTarea;
}



//SI QUIERO CAMBIAR DE TAREA A FINALIZADA, EL ESTADO PASA DE 0 A 1
// SE HACE UN METODO SET
public function finalizarTarea(){
	$this->estadoTarea =1;
	$this->fechaRealizada = date("Y-m-d");
 // ---------------------------- 
}


}

$unaTarea = new Tarea();
/*
$unaTarea->setTarea("la tarea es .......... ");
$unaTarea->setEstadoTarea(0); 
$unaTarea->setFechaIngresada(date("Y-m-d"));
//SI QUIERO CAMBIAR DE TAREA A FINALIZADA, EL ESTADO PASA DE 0 A 1
// SE HACE UN METODO SET
$unaTarea->finalizarTarea();
*/
var_dump($unaTarea);
























?>