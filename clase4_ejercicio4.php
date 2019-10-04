<?php
$conexion = mysqli_connect("localhost","root","","tareastodo");
$consultaFecha = "select tareas.id, tareas.tarea, tareas.fecha_realizada from tareas";
$consulta = mysqli_query($conexion,$consultaFecha);

	echo "<table border= 34>
	<tr> 
		<th> ID</th>
		<th> Tarea</th>
		<th> fechaRealizada </th>
	</tr>";
while ($registro = mysqli_fetch_array($consulta)){
	$id = $registro["id"];
	$tareas = $registro["tarea"];
	$fechaDeTarea = $registro["fecha_realizada"];

	echo "<tr>
		<td> $id </td>
		<td> $tareas</td>
		<td> $fechaDeTarea</td>
	</tr>" ;


	}
	


?>