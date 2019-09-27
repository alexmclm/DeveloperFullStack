<html>
		<!-- le asocio le .php para asociar la informacion que le estoy pasando del formulario-html al servidor .php  -->
	<head>
	</head>	
	<form action = "formulario-php.php"  method = "POST">
		<label>
					<!--el tipo que Ingresara // name => nombre de la variable que asociara con formulario-php.php-->
			Usuario: <input type = "text" name ="usuario"> 
		</label>
		<!-- el <br/>  hace que termine la linea en la posicion que esta y pase a la linea siguiente-->
		<br/> 
		<label>
			E-mail: <input type ="text" name = "email">
		</label>
		<br/>	
		<label>
			Mensaje: <textarea name = "mensaje"></textarea>
		</label>
		<br/>	
		<button type ="submit">Contactarme </button>
	</form>	
	<?php
		echo "Hello world, I'm a <strong>PHP</strong> script!";
	?>
	<!-- Funciona creando una especie de formulario para completar con datos -->
</html>