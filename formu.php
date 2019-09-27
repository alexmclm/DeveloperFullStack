<?php   
 
$usuario = $_POST["usuario"];   
$email=$_POST["email"]; 
$mensaje= $_POST["mensaje"];
$todoOk==true;

if($usuario == " " )
   ($email == " " )
      ($mensaje == " ")               
	{echo "Completar todos los datos requeridos";
		die();
	} 
	else {echo "Consulta enviada";
}

?>