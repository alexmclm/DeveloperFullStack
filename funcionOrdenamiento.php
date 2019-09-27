<?php

	$variable1 = $_POST["variable1"];
	$variable2 = $_POST["variable2"];
	$variable3 = $_POST["variable3"];

	$variableAux = array();

	if(($variable1 > $variable2) && ($variable1 > $variable3)){
		array_push($variableAux, $variable1);
	}
	if(($variable2 > $variable3) && ($variable2 < $variable1)){
		array_push($variableAux,$variable2);

	}
	else{
		array_push($variableAux,$variable3);
	}
	foreach ($variableAux as $key => $value) {
		echo "el codigo ordenado de menor a mayor es: $value";
	}
	// no me esta funcionando, mirar el codigo mas tarde

?>