var express = require("express");
var app = express();

/*
					funcion anonima ()		
*/
app.all("/usuario/", function (req, res) {
  res.send("Hola Mundo!");

});



/*
	RUTEO!
	get and post methods
		app.method
		app

		GET
	La info viaja visible directamente en la URL (limitado a 2000 caracteres).
	No se pueden enviar datos binarios (imágenes, archivos, etc.)
	La página web y la información codificada se separan por un interrogante ? y los bloques de datos se separan con &:
		POST
	La info se envía a través del body del HTTP Request (no aparece en la URL)
	No tiene límite de cantidad de información a enviar.
	La información proporcionada no es visible, por lo que se puede enviar información sensible.
	Se puede usar para enviar datos binarios (archivos, imágenes...).


**********************************************
Direccionamiento básico
direccionamiento all()
No se deriva con ningún método HTTP.
Se utiliza para responder a cualquier método HTTP=>: ->get -> post -> put ->etc
ej: app.all("/usuario/", function (req, res) { toda funcion que se me cante}
********************************************
Direccionamiento básico
app.route()
Sirve para incluir en un único lugar los controladores de rutas para una vía
app.route('/book')
        .get(function (req, res) {
            res.send('Elegir un libro al azar')
        })
        .post(function (req, res) {
            res.send('Agregar un libro')
        })



chiches para que te tome valores desde la url ........necesario? no lo se!
********************************************
 ---------------------- http://localhost:3000/usuario/Lorena	 ---------------------------------
  app.get('/usuario/:nombre', function (req, res) { 

  res.send('Hola '+req.params.nombre);
  } 
  );
 

 ----------------------- http://localhost:3000/usuario?nombre=Lorena ----------------------------------
app.get('/usuario', function (req, res) {
	// llamar con ?nombre=algo	
	res.send('Hola '+req.query.nombre);
	}
	);

*/

app.get("/persona", function(req,res){
	res.send("Hola! " +req.query.nombre);
});
// ===> , entonces en el localhost:3000/persona?nombre =dfsfdsfdas (esto si o si lo debo hacer yo)
// , entonces al darle enter en la url, se supone que responde esto!


app.get("/persona/:nombre",function (req,res){
	res.send("hola " +req.params.nombre);

});

	//lo que conectaran con el servidor (Puerto,funcionAnonima)		
app.listen(3000, function () {
  console.log("Ejemplo de aplicacion escuchando en el port 3000!");
});
