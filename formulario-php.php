<?php
	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$mensaje = $_POST['mensaje'];
	// aca se supone que deberia guardar la informacion que le ponga en formulario-html.php
	echo "buenos dias <h1>$usuario</h1> , su mail , por si se olvido es <h1>$email</h1> y su mensaje que recibimos fue <h1>$mensaje</h1>";
	// y luego desde el formularoi
?>