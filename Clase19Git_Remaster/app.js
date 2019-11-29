var express = require("express");
var plantihbs = require("express-handlebars");


var app = express();

app.use(express.static("staticsFilesPublic"));

app.use(express.urlencoded()); // es para que pase las cosas del formulaario al req.body , por post

	
	// 1erParametro: la extension que debe tener los templates  ------------ 2doParametro: la variable del requiere *plantihbs* 
	//en vez de escribir handlebars, escribe hbs que es la otra palabra reservada que toma
app.engine("hbs", plantihbs()); 				
app.set("view engine", "hbs");					// el hbs del la funcion .engine debe ser idem al .set







//la finalidad de este chiste es poder reducir en parte y serpara lo que seria el body , del head a la hora de hacer 
// la plantilla y a la hora de llamar "invocar"
app.get("/prueba",function(req,res){
			//nombre de la pagina del template
			//y se guarda en la clase19/views/nameDelTemplate.hbs	
	var nombre = "Peter";
	var apellido = "Pan";
	var edad = 15;
		//le paso al template/prueba, los campos nombre,apellido,edad ,y para jugar con esto, se debe ir a prueba.hbs
	res.render("prueba", {nombre,apellido,edad});

});






//practica 01
	//se necesita el maneno de archivos estaticos, soooo. agregar carpeta para esto
		//se de lebe usar el .use(express.static());
		//formulario estatico

app.post("/persona", function(req,res){
	//para que gaurde los errores 
	var errores =[];

	if(!req.body.nombre || req.body.nombre == ""){//para entrar o para poder redireccionar a las variables 
		// res.send("falta el nombre");
		errores.push("falta nombre");		//ya que si hay un error , le digo que almacene en el array este error, idem para los demas
	}   
	if(!req.body.nombre || req.body.apellido == ""){//para entrar o para poder redireccionar a las variables 
		// res.send("falta el apellido");
		errores.push("falta apellido");
	}   
	if(!req.body.edad || req.body.edad < 1 ){//para entrar o para poder redireccionar a las variables 
		//res.send("falta edad");
		errores.push("falta edad");
	}
	//verifico que deba existir el error
	if((errores.length) > 0){
		res.render("error",{errores});
	}
	//si salio todo bien, todo exitoso , debo hacer que me redirecciones a la otra pagina
	var nombre = req.body.nombre;
	var apellido = req.body.apellido;
	var edad = req.body.edad;
	
	res.render("congratulations", {nombre,edad,apellido});

});













//conexion al puerto
app.listen(3000,function(){
	console.log("ushted a ingresado al puerto 3000");
});