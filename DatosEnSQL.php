<?php

$conexion = mysql_connect("127.0.0.1","root","","clase3");
	if ($conexion) {
	echo "me he conectado";
	}else{
	echo " hubo un error";
	}
mysql_close();
?>