<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="POST" accept-charset="utf-8">
		<div align="center"> 
			<label>USUARIO: <input type="text" name="user" placeholder="USUARIO" value=""></label><br>
			<label>PASS :<input type="text" name="pass" placeholder="PASSWORD" value=""></label><br>
			<label>EMAIL :<input type="text" name="email" placeholder="EMAIL" value=""></label><br>
			<label>NOMBRE COMPLETO: <input type="text" name="nombreCompleto" placeholder="NOMBRE COMPLETO" value=""></label><br>
			<button type="submit">GUARDAR</button>
		</div>
	</form>
</body>
</html>


<?php
session_start();
// como es dar de alta , ingresar informacion a la base de datos , el metodo del "html" es POST

// $id = $_POST['id'];
if($_POST == NULL){
	die();
}
if(!isset($_POST['user'])){
	die("Campo Usuario vacio");
}

if(!isset($_POST['pass'])){
	die("Campo Contraseña vacio");	
}
if(!isset($_POST['email'])){
	die("campo email vacio");
}
if(!isset($_POST['nombreCompleto'])){
	die("Campo Nombre Completo vacio");
}


$usuario = $_POST['user'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$nombreCompleto= $_POST['nombreCompleto'];

$user_trim = trim($usuario);
$mail_trim = trim($email);
$nom_trim = trim($nombreCompleto); 

if(empty($usuario)){
	die("wrong");
}
if(empty($pass)){
	die("wrong");
}
if(empty($email)){
	die("wrong");
}
if(empty($nombreCompleto)){
	die("wrong");
}

$cifrarPass = password_hash($pass, PASSWORD_BCRYPT);

// necesito sacar los espacios en blancos, al menos en nombre completo y el nombreDelUsuario




// if(!isset($user_trim)|| empty($user_trim)){
// 	die("campo usuario vacio ");
// }
// if(!isset($pass) || empty($pass)){
// 	die("campo contraseña vacio");

// }
// if (!isset($mail_trim) || empty($mail_trim)) {
// 	die("campo email vacio");
// }
// if (!isset($mail_trim) || empty($mail_trim)) {
// 	die("campo nombreCompleto Vacio");
// }
$conexion = mysqli_connect("localhost","root","","tareastodo");
$darAlta = "insert into users (nombreUser,passUser,emailUser,nombreCompreto) values ('$user_trim','$cifrarPass','$mail_trim','$nom_trim')";

$resu_alta = mysqli_query($conexion,$darAlta);

if($resu_alta == false){
	echo mysqli_error($conexion);
	die("hubo algun problema con la base de datos, sepa Disculpar");
	
}
echo "informacion subida con exito";
header('location:login.php');
// mostrar informacion con un header


?>