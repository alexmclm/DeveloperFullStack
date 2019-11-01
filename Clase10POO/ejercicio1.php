<?php
// sera el tema de los telefonos!
class Telefono {
	// propiedades, valores, atributos
	public $area;
	public $propietario;
	public $numero;
	public $marca;
	// public: puedo acceder al telefono y darle valores o que muestre valores
	//private : lo contrario, pero para que sirve? para determinados casos en el que quiero que no se use o no se toquetee



	//si queremos acceder del metodo que yo haga, a la clase
	private function llamar(){
		//si creo una variable LOCAL, dentro de la funcion, y quiero llamar a si mismo, puedo usar .$variable


		echo "Llamando desde el numero " . $this->numero ; // el . es para concatenar strings
														 //	para referenciarse a si mismo, como el self
														 // y el pesos va en el THIS y no el la variable "global"
	}



	public function probar(){ 		//funcion chota para ver como funciona una funcion llamando a otra funcion
		$this->llamar();
	}


// si cambio a la funcion LLAMAR a privado y creo otra fucion PUBLICA llamado PROBAR que ..llama!
	// cuando instancie el objeto , y diga $unTelefono->probar();
	// el programa me muestra la funcion probar, pero que este hace llamar 

	public function getNumero(){
		return $this->numero;
	}
	public function setNumero($numero){
		$this->numero = $numero;
	}

} 


	$unTelefono = new Telefono();
	//  echo "<pre>"; 			esto <pre> </pre> lo que hace es ordenar el array del registro de la clase
	// var_dump($unTelefono);
	//  echo "</pre>";


	$unTelefono->area = "011";
	$unTelefono->propietario = "Gilirberto";
	// $unTelefono->numero = "123123123"; // esto va a cambiar cuando le hice un setter
	$unTelefono->setNumero("123123123");
	$unTelefono->marca = "Samgsung";

	$unTelefono->probar();

 ?>