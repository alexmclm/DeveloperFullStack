<?php

try{
	mysqli_report(MYSQLI_REPORT_STRICT);
	echo "paso por 1 <br>";
	//ahora cambia la conexion:
	$conexion = new mysqli("localhost","root","","tareastodo"); // sin el _connect()
	echo "paso por 2";


}catch(Exception $e){
	echo $e->getMessage();
}
// COMPOSER_
		/*
			lo que hace esto, es abrirte un monton e librerias para el php
			que son codigos de 3ro, y ordenarlo de manera que se pueda utilizar de manera simple
			y se lo debemos instalar
			y esto es usando el PHP-MAILER
				que lo es mas potente que el mail por defecto del php
				y es lo mas cercado a trabajar con mail real


		*/

//Espacio de nombres

	//es para evitar separandolos en clases ya que al utilizar librerias de 3ro
	//escribir namespapce al proyecto
				
				//clase a 


				//clase b
				

// PRACTICA 1
 /*
 	herencia: cuando hablamos de herencia es de crear clases hijos en los cuales tiene cualidades de la clase padre
 	// ya sea atributos , comportamientos 
 	// pero las clases hijos tambien pueden tener atributos y comportamientos propios distinto al padre

 	















  ?>