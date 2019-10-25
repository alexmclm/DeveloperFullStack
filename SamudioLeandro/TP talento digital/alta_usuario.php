<!DOCTYPE html>
<html>
<head>
	<title> Alta usuario </title>
	<meta charset="utf-8">
</head>
<body>

	<h1>Alta usuario <br><br></h1>
	<form action="alta_usuario.php" method="POST">
	<h2>Bienvenido al formulario de alta</h2> 
	<h3>complete los siguientes campos para terminar el registro</h3>
 <p>Su usuario: <input type="text" name="usuario" /></p>
 <p>Su contraseña: <input type="text" name="pass" /></p>
 <p>Su nombre y apellido: <input type="text" name="name" /></p>
 <p>Su mail: <input type="mail" name="mail" /></p>
 <br><br>
 
 <button type="submit">ingresar datos</button>
</form>

<?php

	if(!isset($_POST['usuario']) and !isset($_POST['pass']) 
	   and !isset($_POST['name']) and !isset($_POST['mail'])){ //validacion por cuestion de seguridad
	die("no se logro linkear las variables");
	}

	if (empty($_POST['usuario']) or trim(($_POST['usuario'])) == ""){

		echo "no se ingreso usuario";
		die();
	}

	if (empty($_POST['pass']) or trim(($_POST['pass'])) == ""){

	  echo "no se ingreso password";
	  die();
	}

	if (empty($_POST['name']) or trim(($_POST['name'])) == ""){

	  echo "no se ingreso nombre y apellido";
	  die();
	}

	if (empty($_POST['mail']) or trim(($_POST['mail'])) == ""){

	  echo "no se ingreso mail";
	  die();
	}

	$usuario = $_POST['usuario'];
	$pass = $_POST['pass'];
	$name = $_POST['name'];
	$mail = $_POST['mail'];

	$conexion = mysqli_connect("localhost", "root", "", "clase7")or die("murio<br><br>");

	//----------------- script SQL ------------------------------

	echo "<h3><br><br> se establecio la conexion con la base de datos</h3>";
	echo"<br><br>";

	$sql = '
	SELECT * 
	FROM USUARIO 
	WHERE USUARIO.usuario_nombre = "'.$usuario.'" 
	';

	$resultado = mysqli_query($conexion,$sql);
	$rowcount = mysqli_num_rows($resultado);

	if($rowcount == 1){
	  echo"<br><br>";
	  echo "<h2>ya existe otro usuario con el nick: $usuario</h2>";
	  echo"<br><br>";
	}else{

	  $fecha= date("Y-m-d");

	  $sql = 'INSERT INTO usuario (usuario_nombre, pass, mail, f_creacion, nombre_apellido) 
	        VALUES ("'.$usuario.'", "'.$pass.'", "'.$mail.'", "'.$fecha.'", "'.$name.'")';


	if ($conexion->query($sql) === TRUE) {
	    echo "<h2><br><br>registro completo, se ah insertado los siguientes datos:<br><br></h2>";

////////////////////////////////////////////////////////////////////

echo "<table border=1>";
	echo "<tr>";
	    echo "<th>usuario_nick</th>";
	    echo "<th>contraseña</th>";
	    echo "<th>mail</th>";
	    echo "<th>fecha de creacion de usuario</th>";
	    echo "<th>nombre y apellido</th>";
	    echo "</tr>";

	    $usuario = $_POST['usuario'];
		$pass = $_POST['pass'];
		$name = $_POST['name'];
		$mail = $_POST['mail'];
			
	    echo "<tr>";
	    echo "<td>$usuario</td>";
	    echo "<td>$pass</td>";
	    echo "<td>$mail</td>";
	    echo "<td>$fecha</td>";
	    echo "<td>$name</td>";
	    echo "</tr>";
echo "</table>";
	  echo"<br><br>";

///////////////////////////////////////////////////////////////////
	  
	  } else {
	    echo "Hubo un error al intentar insertar en la tabla USUARIO<br><br>"/* . $conn->error*/;
	    echo mysql_errno($conexion) . ": " . mysql_error($conexion). "\n";
	}


	  
	}




	mysqli_close($conexion);
?>




</body>
</html>