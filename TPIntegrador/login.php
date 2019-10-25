<?php  
session_start();

if(!isset($_POST['user'])){
	die("Campo Usuario vacio");
}

if(!isset($_POST['pass'])){
	die("Campo Contraseña vacio");	
}
$usuario = $_POST['user'];
$pass = $_POST['pass'];

if(empty($usuario)){
	die("wrong");
}
if(empty($pass)){
	die("wrong");
}

$conexion = mysqli_connect("localhost","root","","tareastodo");
$consulta = "select * from users where nombreUser = '$usuario'";

$rta_cons = mysqli_query($conexion,$consulta);
$registro = mysqli_fetch_array($rta_cons);
if($registro == NULL){
	die("no hay informacion en el registro noob");

}

if(password_verify ($pass, $registro['passUser'])){
	
		$_SESSION['usuario']=$usuario;
		$_SESSION['id']=$registro['id'];
		header("location:darTareaListaTareas.html");
}
else{
	die("no estas bienvenido");
}


?>