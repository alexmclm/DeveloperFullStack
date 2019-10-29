<?php 
// lo que se hara es crear la clase tarea y definir las propiedades que debe tener

class Tarea {
	private $id;
	public $tarea;
	public $fechaRealizada;
	public $tareaRealizada;
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
// get - set tareaRealizada
public function getTareaRealizada(){
	return $this->tareaRealizada;
}
public function setTareaRealizada($tareaRealizada){
	$this->tareaRealizada = $tareaRealizada;
}
 // ---------------------------- 


}

$unaTarea = new Tarea();
$unaTarea->setTarea("dfasdfdasfdasf");

























?>