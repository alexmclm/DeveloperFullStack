var express = require("express");
var appPractica = express();


// http://localhost:3005/color_favorito/rosa 

// ejercicio 1
appPractica.listen(3005, function () {
  console.log("Ejemplo de aplicacion escuchando en el port 3005!,ejercicio1");
});


appPractica.get("/color_favorito/:nombre", function(req,res){
	var html = "<h2> Color favorito: </h2>" +req.params.nombre
	res.send(html);
//	res.send("color favorito " +req.params.nombre);
});

// http://localhost:3005/registro_usuario?nombre=<un_nombre>&apellido=<un_apellido>&edad=<una_edad>
appPractica.get("/registro_usuario",function(req,res){
	res.send("Hola: "+req.query.nombre+" de apellido: "+req.query.apellido+" con edad de: "+req.query.edad);
});
//con <salto de linea, mezcla html con node express js>

