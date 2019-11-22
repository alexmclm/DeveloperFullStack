var express = require("express");
var practica02 = express();

//ejercicio2
//Crear un formulario de registración con los siguientes datos: 
//nombre, apellido, edad, número de celular, país de nacimiento, país de residencia

						//folder name
practica02.use("/estatico",express.static("public"));


practica02.listen(3010, function () {
  console.log("Ejemplo de aplicacion escuchando en el port 3010 , ejercicio 2!");
});

// cuando abra desde el browser un archivo, no va la carpeta 
//http://localhost:3010/macrisan.jpg


// pero  de hecho no deberia existir el entrar archivo asi ...so
	// practica02.use(express.static("public")); se le debe modificar
/*
	a practica02.use("/estatico",express.static("public"));

	y que cada ruta en una imagen, en un html, se le debe tipear la ruta + nombre del archivo + extension del archivo
	http://localhost:3010/estatico/macrisan.jpg
	http://localhost:3010/estatico/otroNombreArchivo.suExtension
*/	
