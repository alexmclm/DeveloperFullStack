<?php 
session_start();


$filtro = "";
if(isset($_GET['tareaRealizada'])==true){
	$filtro = $_GET['tareaRealizada'];
	echo "<h1>existe la tarea!!!!! </h1>";
	echo "<h2>$filtro</h2>";
}
else if (isset($_GET['tareaRealizada'])==false){
	die("no hay tareas pendientes!");
}
$conexion = mysqli_connect("localhost","root","","tareastodo1");
$consulta = "select * from tareas where tareaRealizada LIKE '%$filtro%'"; // traeme todos los datos cuyo nombre corresponde a este filtro
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

		$tarea = $registro['tarea'];
		$tareaRealizada = $registro['tareaRealizada'];
		$fechaRealizada = $registro['fechaRealizada'];
		echo "<tr>
		<td> $tarea </td>
		<td> $tareaRealizada</td>
		<td> $fechaRealizada</td>
	</tr>" ;
	echo $tarea;
}





 ?>