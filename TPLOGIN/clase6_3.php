<?php
// ESTO ERA EL LOGGIN!
session_start();

if (isset($_SESSION['usuario']) ==false) {
	echo "variable no definida";
}

if(!isset($_POST['usuario'])){
	die("campo User vacio");
}
if(!isset($_POST['pass'])){
	die("campo contraseña vacio");
}
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


// $password = password_hash("$pass", PASSWORD_BCRYPT);
// $coinciden = password_verify ($pass, "password");

if(empty($usuario)){
	die ("falto llenar campo usuario o no existe");
}
if (empty($pass)){
	die("contraseña vacia, imposible conectarse");
}



$conexion = mysqli_connect("localhost","root","","tareastodo");
$consultar = "SELECT * from usuario where nombreUser = '$usuario'";
$resultado = mysqli_query($conexion,$consultar);
$registro = mysqli_fetch_array($resultado);



// if(mysqli_num_row($resultado)>0){
// 	$_SESION['usuario'] = $usuario;

// 	echo "entro";
// }

// ---------------------- DE LA CLASE DE LOGGIN! -------------------------------
if($registro == NULL){
	die("estoy muerto");
}
if(password_verify ($pass, $registro['pass'])){

	$_SESSION['id'] = $registro['id'];
	$_SESSION['usuario'] = $usuario;
	header("location: menuLogeado.html");

}
else{
	
	sleep(3);
	
	header("location:clase5-FormularioHTML.html");
}
// ------------------------------------------------------------------------------
// $conexion = mysqli_connect("localhost","root","","formulario");
// $consultar = "select nombre, password from usuario where nombre = '$usuario' and password = '$coinciden'";

// $resultado = mysqli_query($conexion,$consultar);

// if ($resultado){

// 	echo "bienvenido $usuario";
// }
// else {
// 	die ("byedasf");
// }
// ?>