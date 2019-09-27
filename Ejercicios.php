<html>
	<body>
		<!-- Ejercicio1 -->
		<h1>"Muy buenas a Todos , esto es para responder las preguntas de php clase 1"</h1>
		<?php
		// la cuestion es que a la hora de imprimir por pantalla y queres usar comandos de html5, como <br1></br1>, <h2> </h2>, etc
		// se hace sobre la linea donde se imprime y dentro de las comillas "", en este caso despues del echo "<>xxxxxx<>"
			$valor = 20;
			$valorSiguiente = $valor + 1;
			echo "<h2>Muy buenas a todos mis queridos compatriotas , su proximo valor al $valor es $valorSiguiente</h2>"; 
			echo "<p>diferenciacion de el de arriba</p>";
		?>

		<!-- Ejercicio 2 -->
		<?php

			$temperaturaCelcuis = 39;
			$temperaturaEnFarahent = ($temperaturaCelcuis * 9/5) + 32;
			echo "<h2>temperatura actual: $temperaturaCelcuis, que es equivalente a $temperaturaEnFarahent °F</h2>"; 
			
		?>
		<!-- Ejercicio 3  -->
		<?php
			$unAnioDeNacimiento = 1995;
			$unAnioActual = 2019;
			$edad= $unAnioActual - $unAnioDeNacimiento;
			if($edad>=18)
			echo "<h2>esta persona es mayor de edad con $edad de edad</h2>"; 
			
		?>
		<!-- Ejercicio 4 -->
		<?php
			$variable1 = 15;
			$variable2 = 25;
			$variable3 = 23;
			$varAuxiliar;

		?>

		<!-- Ejercicio 5 //CICLOS -->
		<?php
			echo "losNumerosPares son: ";
		for($i =0; $i<100;$i=$i+2){
			echo " $i \n";
		}

		?>
		<!-- Ejercicio 6 muy falopa , ejercicio de crear numeros random en 2 variables con condiciones-->
		<!-- Ejercicio 7  -->
		<?php
		$valores = array(1,3,5,46,12,40,18,9,11,13);
		$valoresMayores = array(); // esto es valido , ya que instancio un array vacio que se completara en el proceso
		$valoresMenores = array();
		$sumaTotal =0;
		$promedio = 0;
		$cantidadMenores =0;
		$cantidadMayores =0;

		foreach ($valores as $key => $value) {
			$promedio = $promedio + $value;
		}
			$promedio = $promedio / 10;
		foreach ($valores as $key => $value) {
			if($value < $promedio){
				$cantidadMenores = $cantidadMenores + 1;
				array_push($valoresMenores,$value); // parametors : Vector, $Valor
			}
			// if (valor del vector, que es el que sigue al =>)
			if($value > $promedio){
				$cantidadMayores = $cantidadMayores +1 ;
				array_push($valoresMayores,$value);
			}
		}
		echo "<h2> hay $cantidadMenores numeros menores al promedio</h2>";
		echo "<h2> hay $cantidadMayores numeros mayores al promedio</h2>";
		echo "<h2> el promedio es $promedio</h2>";
		foreach ($valoresMayores as $key => $value) {
			echo "<p> los valores mayores al promedio son: $value </p>";
		}
		foreach ($valoresMenores as $key => $value) {
			echo "<p> los valores menores al promedio son: $value </p>";
		}

		?>
		<!-- Ejercicio 8 -->
		<?php
			$vectorNumeroRandom = array();
			$i =0;
			
			while($i < 100){
				array_push($vectorNumeroRandom,rand(0,100));
				$i++;
			}
			foreach ($vectorNumeroRandom as $key => $value) {
				echo "<p> Valores: $value </p>";
			}
		?>
		<!-- Ejercicio 9 -->
		<?php
			$temperaturaCelcius = 20;
			function fahrahent($temperaturaCelcius){
				return ($temperaturaCelcius * 9/5) + 32;
			}
			
		?>
	</body>
</html>