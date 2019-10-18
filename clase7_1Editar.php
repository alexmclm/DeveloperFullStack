<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
<?php
// Aquí va a ir más código
	$id = $_GET["id"];
	$nombre = $_GET['nombre'];
	
	$conexion = mysqli_connect('localhost', 'root', '', 'tareastodo');

	$sql = "select * from usuario where id=$id ";
	$respuesta = mysqli_query($conexion, $sql);
	$registro = mysqli_fetch_array($respuesta);
	

	if ($registro==NULL) {
 		echo "Contacto no encontrado";
 		// header("Location: clase7.php");
 	die("Mori!");
}
	$tarea = $registro['tarea'];

	if(empty($_POST) == false){
		$tarea = $_POST['tarea'];

		$update = "update tarea set tarea = '$tarea' where id = '$id'";

		
		$respuesta = mysqli_query($conexion,$update);

		header("Location: clase7.php");
		echo "SE MODIFICO LA TAREAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA!";
	}

	?>
</head>
<body>

	<form method="post">

 	<label>ID: <input type="text" name="id" value= " <?php echo $tarea ?> " > </label> <br>
 	<label>Usuario: <input type="text" name="usuario" value= " <?php echo $tarea ?> " > </label> 
 	<br>
 	<br>
 	
 	<br><br>
 	 <button type="submit">Guardar</button>

 	</form>
 </body>
 </html>

 