
<?php
// como es dar de alta , ingresar informacion a la base de datos , el metodo del "html" es POST

// $id = $_POST['id'];
session_start();
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$nombreCompleto= $_POST['nombreCompleto'];

$cifrarPass = password_hash($pass, PASSWORD_BCRYPT);

// necesito sacar los espacios en blancos, al menos en nombre completo y el nombreDelUsuario

$user_trim = trim($usuario);
$mail_trim = trim($email);
$nom_trim = trim($nombreCompleto);


if(!isset($user_trim)|| empty($user_trim)){
	die("campo usuario vacio ");
}
if(!isset($pass) || empty($pass)){
	die("campo contraseña vacio");

}
if (!isset($mail_trim) || empty($mail_trim)) {
	die("campo email vacio");
}
if (!isset($mail_trim) || empty($mail_trim)) {
	die("campo nombreCompleto Vacio");
}
$conexion = mysqli_connect("localhost","root","","tareastodo");
$darAlta = "insert into users (nombreUser,passUser,emailUser,nombreCompreto) values ('$user_trim','$cifrarPass','$mail_trim','$nom_trim')";

$resu_alta = mysqli_query($conexion,$darAlta);

if($resu_alta == false){
	echo mysqli_error($conexion);
	die("hubo algun problema con la base de datos, sepa Disculpar");
	
}
echo "informacion subida con exito";
// mostrar informacion con un header


?>