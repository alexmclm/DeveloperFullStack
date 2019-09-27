<?php
	$nombre =$_POST['nombre'];
	$email =$_POST['email'];
	$mensaje =$_POST['mensaje'];

	

	if(!isset($_POST['nombre']) || empty($_POST['nombre'])){
		echo "Falta informacion en la variable nombre";
		die();
	}

	if (!isset($_POST["email"]) || empty($_POST["email"])){
		echo "Falta informacion en la varaible email";
		die();
	}
	if(!isset($_POST["mensaje"]) || empty($_POST["mensaje"])){
		echo "Falta mensaje";
		die();
	}

	echo "escribiste todo capó!";
	

// forma de ver para que valide que la variable "nomnbre" existe en el html
// usando isset
	// pero como saber si esa variable "nombre" tiene datos?, con la funcion empty

?>