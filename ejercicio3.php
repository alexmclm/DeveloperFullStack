<?php 
// Clase Operaciones
class Operaciones {
	public $unValor;
	public $otroValor;
	public $resultado;

	// public function setValores($unValor,$otroValor){
	// 	$this->unValor = $unValor;
	// 	$this->otroValor = $otroValor;
	// }


	public function sumar($unValor,$otroValor){
 		//$this->unValor - $this->otroValor; no funciona con this cuando hago operaciones
		return $unValor + $otroValor;
	}
	public function restar ($unValor,$otroValor){
		 
		return $unValor - $otroValor;
	}
	public function multiplicar($unValor,$otroValor){
		return $unValor * $otroValor;
	}
	public function dividir ($unValor,$otroValor){
		if( $otroValor >0){
			return $unValor / $otroValor;
		}
		else{
			die("Error Fatal");
		}
	}
	// public function mostrarResultado(){
	// 	echo "el resultado es: " . $this->resultado;

	// }

}
$unosValores = new Operaciones();
//$unosValores->setValores(12,8);
$resultado = $unosValores->sumar(12,0);
echo "la suma da $resultado<br>";
$resultado1 = $unosValores->restar(12,2);
echo "la suma da $resultado1<br>";
$resultado2 = $unosValores->multiplicar(12,2);
echo "la suma da $resultado2<br>";
$resultado3 = $unosValores->dividir(12,0);
echo "la suma da $resultado3";

// var_dump($unosValores);
















?>