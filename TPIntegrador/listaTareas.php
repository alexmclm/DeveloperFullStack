
<?php

session_start();
//editar tarea ingresando mediante la id
// el $_get lo que hace es traer informacion, una sola
// el $_post hace es traer y poder modificar un formulario completo

// $filtroId = "";
// $id = $_GET['id'];
// //verifico que haya informacion en el id, si la hay asigno ese id al filtro para luego entrar a la base de datos
// if(isset($_GET['id'])==true){
// 	$filtroId = $_GET['id'];
// }else{
// 	die("no existe id solicitada");
// }
// if(!isset($id) || empty($id)){
// 	die("Error con la Id");
// }
$conexion = mysqli_connect("localhost","root","","tareastodo");
$consulta = "select * from tareas";
$resul_cons = mysqli_query($conexion,$consulta);

	echo " <div>Tarea: " ;
	echo "<table >
		<tr>
		<th> TAREA </th>	
		<th>TAREA REALIZADA </th>
		<th>FECHA REALIZADA </th>
		</tr>";
while($registro = mysqli_fetch_array($resul_cons)){
	$id = $registro['id'];
	$tarea = $registro['tarea'];
	$fechaRe= $registro['fechaRealizada'];

	echo "<tr>
		<td> $id </td>
		<td> $tarea</td>
		<td> $fechaRe</td>
		<td><a href='listaTareasEditar.php?id=$id'>Editar</a></td>
 		
 		
	</tr>" ;
}

echo "</table>"
  ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="filtradoTexto.php" method="get" accept-charset="utf-8">
		<div align="center">
			<label>Filtrar Por Tareas <input type="text" name="tarea" placeholder="FILTRAME" value=""></label>
			<button type="submit">Buscar</button>
		</div>
	</form>
</body>
</html> 