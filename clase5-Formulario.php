<?php 
// cambiar el trim! en vez de esta garcha
$username = $_POST['nombre1'];
$password = $_POST['password1']; 
$email = $_POST['email1'];
$nameComplete = $_POST['nombreCompleto1'];
$encriptarPass = $password_encriptado = password_hash("$password", PASSWORD_BCRYPT);
$username_trim = trim($username);
$nameComplete_trim = trim($nameComplete);


if (!isset($username_trim) || empty($username_trim) ){
	die("no entro por aca: usuario");
}
if (!isset($password)|| empty($password)){


	die("no entro por password , mire de vuelta");
}
if (!isset($email) || empty($email)){


	die("no entro por aca mail , vereifique su mail que es bien escrito");
}
if(!isset($nameComplete_trim)|| empty($nameComplete_trim)){
	die("mal ingresado el nombre Completo");
}


$conexion = mysqli_connect("localhost","root","","formulario");
$inyectar = "insert into usuario (nombre,password,email,nombreCompleto) values ('$username_trim','$encriptarPass','$email','$nameComplete_trim')";

$resultado_inyeccion = mysqli_query($conexion,$inyectar);

if($resultado_inyeccion == false){
	die ("mori por aca por algo que hiciste");
}
echo "hurray!!";




?>
