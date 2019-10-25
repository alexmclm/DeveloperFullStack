<?php 
session_start();
// no importa tener un $_GET[id] aca arriba xq lo que yo estoy filtrando es por texto
$filtro = "";
if(isset($_GET['tarea'])==true){
	$filtro = $_GET['tarea'];
	echo "<h1>existe la tarea!!!!! </h1>";
	echo "<h2>$filtro</h2>";
}
else if (isset($_GET['tarea'])==false){
	die("no existe tarea!");
}
$conexion = mysqli_connect("localhost","root","","tareastodo1");
$consulta = "select * from tareas where tarea LIKE '%$filtro%'"; // traeme todos los datos cuyo nombre corresponde a este filtro
// % xxxxx % denota que puede estar el 'XXXXX' en cualquier parte del texto
$resultadoConsulta = mysqli_query($conexion,$consulta);

// echo "<h1> las tareas que no fueron realizadas </h1>";
// echo "<table border =7>
// 		<tr>
// 		<th> ID </th>	
// 		<th>TAREA </th>
// 		</tr>";
	echo "Tarea encontrada con exito, sus datos son: ";
	echo "<table border =2>
		<tr>
		<th> TAREA </th>	
		<th>TAREA REALIZADA </th>
		<th>FECHA REALIZADA </th>
		</tr>";
	
while ($registro = mysqli_fetch_array($resultadoConsulta)){
		$id = $registro['id'];
		$tarea = $registro['tarea'];
		$tareaRealizada = $registro['tareaRealizada'];
		$fechaRealizada = $registro['fechaRealizada'];
		echo "<tr>
		<td> $id </td>
		<td> $tarea </td>
		<td> $tareaRealizada</td>
		<td> $fechaRealizada</td>
		<td><a href='listaTareasEditar.php?id=$id'>Editar</a></td>
		<td><a href ='borrar.php?id=$id'>Borrar</a></td>
	</tr>" ;

	echo $tarea;
}





 ?>