<?php  

class Formulario{
	private $id;
	public $usuario;
	public $pass;
	public $email;
	public $nombreCompleto;

	public function getUsuario(){

	}
	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function setPass($email){
		$this->pass = $pass;
	}
	public function getPass(){

	}
	 public function setEmail($email){
	 	$this->email = $email;
	}
	public function getEmail(){

	}
	public function setNombreCompleto($nombreCompleto){
		$this->nombreCompleto = $nombreCompleto;
	}
	public function getNombreCompleto(){

	}
	public function validar($post){
		if(empty($usuario)){
			echo "campo usuario vacio";
		}
		if(empty($pass)){
			echo "campo pass vacio";
		}
		if(empty($email)){
			echo "campo mail vacio";
		}
		if(empty($nombreCompleto)){
			echo "campo nombre completo vacio"
		}
	}
}













?>