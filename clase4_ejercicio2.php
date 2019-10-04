<?php
$conexion = mysqli_connect("localhost","root","","tareastodo");
$consultaTareasRealizada = "select tareas.tarea , tareas.id from tareas where tareaRealizada = false";
$consulta = mysqli_query($conexion,$consultaTareasRealizada);
echo "<h1> las tareas que no fueron realizadas </h1>";
echo "<table border =7>
		<tr>
		<th> ID </th>	
		<th>TAREA </th>
		</tr>";
while ($registro = mysqli_fetch_array($consulta)){
	$id = $registro["id"];
	$tareasNoHechas = $registro["tarea"];
	echo "<tr>
		<td> $id </td>
		<td> $tareasNoHechas</td>
	</tr>" ;
}
?>