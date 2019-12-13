var express = require("express");
var app = express();
var hbs = require("express-handlebars");
//instalado el --save express-sessions, puedo invocar!
var session = require("express-session");
//recordar que para usar mongoose debo instalar por consola
//>npm install mongoose --save
var mongoose = require("mongoose");

//como tengo los handlebars importados (xq instale por consola >npm install exress-handlebars --save)
app.engine("handlebars", hbs());
app.set("view engine", "handlebars");

mongoose.connect("mongodb://localhost:27017/tp2Nodejs",{useNewUrlParser: true, useUnifiedTopology: true});

//el use(session({secret: "xxxxx"})) => es para poder encriptar el id en cada session!!!!
app.use(session({secret: "claveDelTp2"}));

var usuarioSchema = mongoose.Schema({
    nombre: String,
    apellido: String,
    documento: Number,
    email: String,
    usuario: String,
    password: String,
    // fechaAltaNovedad: String,
    // novedad: String

});
var UsuarioModel = mongoose.model("Usuario", usuarioSchema);

//el urlncoded: es para recibir parametros por post, tradicionales
app.use(express.urlencoded());
//y si quiero recibir informacion en formato jason, es lo de abajo
app.use(express.json());


app.get("/",function(req,res){
    //este render("LOGIN") ==> apunta a login.handlebars
    res.render("login");
});
var nombreInstante;
app.post("/postLogin",async function(req,res){
    var unUsuario = await UsuarioModel.findOne({usuario: req.body.usuario , password: req.body.password});
    if(unUsuario){
        //si hay un usuario, entonces a la session le guardo la id del usuario y redirecciono
        req.session.usuario_id=unUsuario._id;
        nombreInstante = req.body.usuario;
        res.redirect("/safeLogin");
    }else{ //si no hay un usuario entonces le muestro la misma ventana con una letra de que hubo un error
        res.render("login", {mensaje_error: "Usuario o Contraseña incorrecta, por favor verifique"});
    }

});
app.get("/safeLogin",function(req,res){
    if(!req.session.usuario_id){
        res.redirect("/");
        return
    }else{

        res.render("darAltaNovedad");
    }
});


app.post("/postRegistro", async function(req,res){
    var completo = false;
    var usr = new UsuarioModel();
    usr.nombre = req.body.nombre;
    usr.apellido = req.body.apellido;
    usr.documento = req.body.documento;
    usr.email = req.body.email;
    usr.usuario = req.body.usuario;
    usr.password = req.body.password;

    if(!req.body.nombre || req.body.nombre == ""){
        res.render("postRegistro.handlebars", {mensaje_campoVacio: "algunos campos vacio, por favor completelo"});
    }
    if(!req.body.apellido || req.body.apellido == ""){
        res.render("registracion.handlebars",{mensaje_campoVacio: "algunos campos vacio, por favor completelo"});
     //   res.send("campo apellido Vacio");
    }
    if(!req.body.documento || req.body.documento == ""){
        res.render("registracion.handlebars", {mensaje_campoVacio: "algunos campos vacio, por favor completelo"});
       // res.send("campo documento Vacio");
    }
    if(!req.body.email || req.body.email == ""){
        res.render("registracion.handlebars",{mensaje_campoVacio: "algunos campos vacio, por favor completelo"});
      //  res.send("campo email Vacio");
    }
    if(!req.body.usuario || req.body.usuario == ""){
        res.render("registracion.handlebars",{mensaje_campoVacio: "algunos campos vacio, por favor completelo"});
       // res.send("campo usuario Vacio");
    }
    if(!req.body.password || req.body.password == ""){
        res.render("registracion.handlebars", {mensaje_campoVacio: "algunos campos vacio, por favor completelo"});
        //res.send("campo password Vacio");
    }
        await usr.save();
        res.redirect("/"); //redirecciono a login
//aca no deberia estar si quiere escribir o no la novedad y dar de alta
});
app.get("/getRegistro",function(req,res){
    res.render("registracion");
});

// no es una especie de agregar a cada usuario un campo de novedad y guardarlo con la fecha !
// app.post("/postNovedad", async function(req,res){
//     var listaNovedad = [];
//     var unUsuario = await UsuarioModel.findOne({usuario: req.body.usuario , password: req.body.password, novedad: req.body.novedad});
//     try{
//         if(unUsuario){
//             req.session.usuario_id = unUsuario._id;
//             unUsuario.novedad = req.body.novedad;
//             await unUsuario.save();
//             console.log("Hurray");
//         }
//     }catch(e){
//         console.error(e);
//     }

// });
var lista = [{
    nombre: String,
    novedad: String,
    fecha: Date
}];
var listado = [];
// app.post("/postNovedad", async function(req,res){
//     //el findOne devuelve un dato Entero =>, yo requiero solo un dato de ahi
//     var unUsuario = await UsuarioModel.findOne({nombre});
//     //unUsuario = unUsuario.nombre
//     lista.push(unUsuario, req.body.novedad, req.body.fecha);
//     res.send(lista);
// });
app.post("/postNovedad", async function(req,res){
    // var unUsuario = await UsuarioModel.findOne({},"nombre");
    //recontra re mil rebuscado, jajajaajajaja
        lista.push(nombreInstante,req.body.novedad,req.body.fecha);
        var listaOrdenada = lista.sort((a,b) =>b.Date - a.Date);
       // res.redirect("listaNovedades");
        res.send(listaOrdenada);

});


//API LOGIN
app.post("/api/postLogin", async function(req,res){
    var unUsuario = await UsuarioModel.findOne({usuario: req.body.usuario , password: req.body.password});
    if(unUsuario){
        //si hay un usuario, entonces a la session le guardo la id del usuario y redirecciono
        req.session.usuario_id=unUsuario._id;
        res.json(unUsuario);
    }else{ //si no hay un usuario entonces le muestro la misma ventana con una letra de que hubo un error
        res.status(404).send();
    }

});
app.listen(3000, function(){
    console.log("Escuchando el hiper mega puerto 3000");
});