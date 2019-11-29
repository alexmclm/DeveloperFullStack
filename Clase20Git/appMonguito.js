var express = require("express");
var appMonguito = express();

//habilito libreria mongo
var mongoose= require("mongoose");

//1erParametro la ruta! / nombreDeLaBBDDnoSQL
//2doParametro
mongoose.connect("mongodb://localhost:27017/tareas", { useNewUrlParser: true,useUnifiedTopology: true });




//'estructura' que debe tener la tabla, en la app 
	//se debe respetar las mayusculas y minusculas
var tareaSchema = new mongoose.Schema({
	nombre: String,     // e inicializo la variable de tipo JSON
	finalizada: Boolean
});	
//inicializo la tabla
		//1erParametor: nombre de la tabla
		//2doParametro: la 'estructura' que matcheara con la BBDD
var Tarea = mongoose.model("tarea",tareaSchema);


//con esto ya esta creada la tabla y podremos utitlizar los siguientes methods 

appMonguito.get("/tareas", async function(req,res){
	var lista = await Tarea.find();
	res.send(lista);
});
//como se conecta con algo externo como una BBDD, no se cuanto tardaraa en responder
//entonces cuando algo puede tardar tiempo, es algo asincronico , entonces le debo decir que esto Async y await
//ya que si no le pongo Async - await , a la hora de correr el programa, al agarrar la tabla, que es algo externo
//devolveria un error o vacia ya que no devolvio de manera correcta 
//recomendado trabajar con funciones asincronicas

appMonguito.get("/tareas/:id", async function(req,res){
	//se supone que a la hora de conectar a la BBDD debo hacer un try and catch , 
	//por que no se si realmente funciona, entonces debo verificar de que realmente exista 

	var unaTarea = await Tarea.findById(req.params.id);
	res.send(unaTarea);
});

// *********** Agregar un registro*****************
appMonguito.post("/tareas", async function(req,res){
	var unaTarea = new Tarea();
	unaTarea.nombre = req.body.nombre;
	unaTarea.finalizada = req.body.finalizada;
	await unaTarea.save();
	res.send("Guardado");
});
// ****************** Update ***********************
//como se llego por el put una id, y al ser una BBDD Externa, debe tambien ser await
appMonguito.put("/tareas/:id", async function(req,res){
	var unaTarea = await Tarea.findById(req.params.id);   
	unaTarea.nombre = req.body.nombre;  
 	unaTarea.finalizada = req.body.finalizada;
 	await unaTarea.save();	
 	res.send("Dato Modificado")
});
// instalarse el COMPASS MONGODB --> se instala en la instalacion de MONGODB
	// aparece en el escritrio si lo instalas correctamente

//soi se instalo el community etc
// es mas bonito
//si se usa la consola de comandos de mongo
// es alto bardo , muy parecido a haskell + comandos de sql

//********************* DELETE **************************
appMonguito.delete("/tareas/:id", async function(req,res){
	 await Tarea.findByIdAndRemove(req.params.id);
	 res.send("Eliminado");
});


appMonguito.listen(3000,function(){
	console.log("ingresamos al servidor 30000");
});