<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>LOGIN</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form  method="POST" accept-charset="utf-8">
		<div align="center">
		<label>usuario: <input type="text" name="user" placeholder="USUARIO" value=""></label><br>
		<label>password: <input type="password" name="pass" placeholder="PASSWORD" value=""></label><br>
		<button type="submit">INGRESAR</button>
		</div>

	</form>
</body>
</html>


<?php  
session_start();
if($_POST == NULL){
	die();
}
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

//$count = mysql_num_rows($rta_cons);
if($registro == NULL){
	die("no hay informacion en el registro ");

}


if(password_verify ($pass, $registro['passUser'])){
	
		$_SESSION['usuario']=$usuario;
		$_SESSION['id']=$registro['id'];
		header("location:darTareaListaTareas.html");
}
else{
	//die("no estas bienvenido");
	echo "<a href='darAlta.php'>Registrarse</a>";
}


?>