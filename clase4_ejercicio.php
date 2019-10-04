<!DOCTYPE html>
<html>
<head>
	<title> LAS TAREAS QUE OS MOSTRAREA A CONTINUACION FUERON ESTAS</title>
</head>
<body>

</body>

<?php
$conexion = mysqli_connect("localHost:3306","root","","tareastodo");
$consultaTareas ="select * from tareas";
$consulta = mysqli_query($conexion,$consultaTareas);
// $insertarTareas = "insert into tareas (tarea,tareaFinalizada) values (?,?)";

echo "<table border=1>
		<tr>
			<th>ID TAREA</th>
			<th>TAREA</th>
			<th>TAREA FINALIZADA </th>

		</tr>";

while($registro = mysqli_fetch_array($consulta)){
	$id = $registro["id"];
	$tareas = $registro["tarea"];
	$tareasFinalizada = $registro["tareaRealizada"];
	echo "<tr>";
	echo "<td> $id </td>";
	echo "<td> $tareas </td>";
	echo "<td> $tareasFinalizada </td>";//<li></li> lo que hace el li es separar por puntos 
	echo "</tr>";
}
echo "<table>";
?>

</html>