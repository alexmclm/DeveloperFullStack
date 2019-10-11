<?php

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$password = password_hash("$pass", PASSWORD_BCRYPT);
$coinciden = password_verify ($pass, "password");

if(!isset($usuario) || empty($usuario)){
	die ("falto llenar campo usuario o no existe");
}
if (empty($pass)){
	die("contraseña vacia, imposible conectarse");
}
$conexion = mysqli_connect("localhost","root","","formulario");
$consultar = "select nombre, password from usuario where nombre = '$usuario'";
$resultado = mysqli_query($conexion,$consultar);
if(password_verify ($pass, 'password')){
	echo "bienvenido $usuario";

}
else{
	die("no estas bienvenido");
}

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