<?php
	$anioDeNacimiento = $_POST['anioDeNacimiento'];
	$anioActual = 2019;
	$edad = $anioActual - $anioDeNacimiento;
	if ($edad>18){
		echo " soy mayor de edad con $edad de anios";
	}
	else{
		echo "aun soy menor";
	}
?>