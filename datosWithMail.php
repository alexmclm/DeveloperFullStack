<?php
	$nombre = $_POST['nombre'];
	$email =$_POST['email'];
	$mensaje =$_POST['mensaje'];
	
	mail(to, subject, message);

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
?>
