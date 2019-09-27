<?php
	$temperaturaEnFare= $_POST['TemperaturaEnFarenheit'];
	$tempeACelsius = ($temperaturaEnFare - 32 )* 5/9;

	echo "la temperatura de farenheit $temperaturaEnFare °F es $tempeACelsius °C";
?>	