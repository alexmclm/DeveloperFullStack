<?php 
class Comprobante{
	public $numero;
	public $cliente;

}



class ComprobanteFactura extends Comprobante{

		public $tipo;
		public $montoTota;
		public $iva;

}


$comp = new ComprobanteFactura();


$comp->numero =123132;
$comp->cliente= "fdsfas";
$comp->tipo = "A";
$comp->montoTota = 102345;
$comp->iva = 21;
echo "<pre>";
var_dump($comp);
echo "</pre>";



//laravel 
/*
	framework: entorno , un marco donde yo puedo desarrollar
	crea una estructura de carpeta donde guarda el orden y configuracion de proyectos
	de que sirve?: sirve dividir y organizar los php y los html con un cierto criterio de organizacion
	osea que si quiero guardar ciertos archivos , va en cierto carpeta
	cuando el proyecto es mas que un formulario laravel es mucho mas ventajoso
	como se instala:? con composer















	------------- mvc

	patron de diseño:
	eje: en las app de instagram, facebook.... con el scroll infinito, esto es un patron de diseño de interfaz grafica
	se busca como poder estructurar diferentes cosas, en este caso , las aplicaciones web
	cunado se hacia un php, en una parte era $_POST, que nos mandaba el usuario, luego trabajaba con las base de datos
	y despues tenia la parte de html que le mostrare al usuario
	el patron lo que hace es: en vez de hacer todo esta mezcla en un solo php
	es separar en partes. eje: uno que se encarga del $_POST[]
		otro que se encarga de la BBDD
		otro se que encarga del html

		--un controlador que se encarga de editar, mostrar, borrar tareas
		-- otro controlador que se encargue del usuario;
		







		------------------------- se instalo laravel --------------------------

		al escribir : es como decir / en el navegador

		ir a routes / web.php , lo que hace es 
		las vistas: resources / view ...y todo estos es las vistas  y es lo que vemos cuando ingresamos localhost:8000



		boostrap

		si copio el link de <a href etc etc etc y lo pego en el html dentro de lhead

		y luego puedo buscar por botones y pegarlo en php
		 o buscar las tablas y pegarlo , un golazo !!


		 ´para configuracion con la base de datos , hay un archivo llamado .env, y todo esto es para 
		 la configuracion con la base de datos!


    ************* mirar bloc de notas
		 13.pdf
		 	models: uno para cada base de datos
		 en la app, donde esta? , en la raiz de la app, yendo 


		 -------------------
		 CONTROLLERS : puntos de entradas a la aplicacion
		 se encarga de ejemplo, de guardar informacion de un usuario y con este arrastrar todo el proceso
		 que este requiera
	***************mirar bloc de notas



*/
?>