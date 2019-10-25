<!DOCTYPE html>
<html>
<head>
	<title> Alta usuario </title>
	<meta charset="utf-8">
	</head>
<body>

<h1> Alta de Usuario <br><br></h1>
<form action = "Alta_de_Usuario.php" method="POST">
<h2>Bienvenido al fomulario de Alta!</h2>
<h3>Complete los siguientes datos para terminar su registro en el sistema</h3>
<p>Su Usuario: <input type="text" name="usuario" /></p>
<p>Su Contraseña: <input type="text" name="pass" /></p>
<p>Su Nombre y Apellido: <input type="text" name="mail" /></p>
<p>Su Mail: <input type="text" name="name" /></p>
<br><br>

<button type="submit"> Ingresar Datos </button>
</form>

<?php

if(!isset($_POST ['usuario'] and !isset ($_POST['password'])
 and !isset($_POST ['name'] and !isset ($_POST['mail'])) {
//validacion por cuestion de seguridad
die ("No se logró realizar la conexión con dichas variables")	
 }

 if (empty($_POST['usuario']) or trim(($_POST['usuario'])) == "") {
 	echo "No se ingreso correctamente el usuario"
 	die();
 }

 if (empty($_POST['password']) or trim(($_POST['password'])) == "") {
 	echo "No se ingreso correctamente la contraseña"
 	die();
 }

  if (empty($_POST['name']) or trim(($_POST['name'])) == "") {
 	echo "No se ingreso correctamente su nombre y apellido"
 	die();
 }

  if (empty($_POST['mail']) or trim(($_POST['mail'])) == "") {
 	echo "No se ingreso correctamente el mail"
 	die();
 }


$usuario = $_POST['usuario']
$password = $_POST['passwordd']
$name = $_POST['name']
$mail = $_POST['mail']


$conexion = mysql_connect("localhost", "root", "", "Base_De_Datos") or die ("No funciona<br><br>");

echo "<h3><br><br> Se establecio la conexion con la base de datos" 
echo"<br><br>";

$sql = '
	SELECT * FROM USUARIO WHERE USUARIO.usuario_nombre = "'.$usuario.'" ';

	$resultado = mysqli_query($conexion,$sql);
	$rowcount = mysqli_num_rows($resultado);

	if($rowcount == 1){
	  echo"<br><br>";
	  echo "<h2>Ya existe otro usuario con el nick: $usuario</h2>";
	  echo"<br><br>";
	}else{

	$fecha= date("Y-m-d");

	$sql = 'INSERT INTO usuario (usuario_nombre, password, mail, f_creacion, nombre_apellido) 
	        VALUES ("'.$usuario.'", "'.$password.'", "'.$mail.'", "'.$fecha.'", "'.$name.'")';

if ($conexion->query($sql) === TRUE) {
	    echo "<h2><br><br>El registro se completó correctamente, se ha insertado los siguientes datos:<br><br></h2>";

echo "<table border=1>";
	echo "<tr>";
	    echo "<th>usuario_nick</th>";
	    echo "<th>password</th>";
	    echo "<th>mail</th>";
	    echo "<th>fecha de creacion de usuario</th>";
	    echo "<th>nombre y apellido</th>";
	    echo "</tr>";

$usuario = $_POST['usuario'];
		$password = $_POST['password'];
		$name = $_POST['name'];
		$mail = $_POST['mail'];

	echo "<tr>";
	    echo "<td>$usuario</td>";
	    echo "<td>$password</td>";
	    echo "<td>$mail</td>";
	    echo "<td>$fecha</td>";
	    echo "<td>$name</td>";
	    echo "</tr>";
echo "</table>";
	  echo"<br><br>";

	  } else {
	    echo "Hubo un error al intentar insertar en la tabla USUARIO<br><br>";
	    echo mysql_errno($conexion) . ": " . mysql_error($conexion). "\n";
	}
	mysqli_close($conexion);
?>

</body>
</html>