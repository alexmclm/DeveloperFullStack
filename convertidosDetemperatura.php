<?php
	$celsius = $_POST['temperaturaEnCelsius'];
	$tempEnFahrenheit = ($celsius *1.8)+35;
	echo "la temperatura $celsius °C, en faradios es : $tempEnFahrenheit";
?>	