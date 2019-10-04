<?php
$conexion = mysqli_connect("localhost", "root", "", "tareaspendientes");
$resultado = mysqli_query($conexion, "SELECT * FROM tareas");

echo "<table>";
echo "<tr> <th>Todas las actividades</th></tr>";
while ($unRegistro = mysqli_fetch_array($resultado)) 
{	
	$actividad = $unRegistro["actividad"];
	echo "<tr>";	
	echo "</tr>";	
	echo "<td>$actividad</td>";
}
echo "</table><br>";

$conexion3 = mysqli_connect("localhost", "root", "", "tareaspendientes");
$resultado3 = mysqli_query($conexion3, "SELECT * FROM tareas");
echo "<table>";
echo "<tr> <th>Actividades pendientes</th></tr>";
while ($unRegistro = mysqli_fetch_array($resultado3)) 
{	
	$actividad = $unRegistro["actividad"];
	echo "<tr>";
	echo "</tr>";
	if($unRegistro["realizada"] == 0)
	{
		echo "<td>$actividad</td>";
	}
}
echo "</table><br>";

$conexion2 = mysqli_connect("localhost", "root", "", "tareaspendientes");
$resultado2 = mysqli_query($conexion2, "SELECT * FROM tareas");

echo "<table>";
echo "<tr><th>Actividades realizadas</th></tr>";
while ($unRegistro = mysqli_fetch_array($resultado2)) 
{	
	$actividad = $unRegistro["actividad"];
	$fecha =$unRegistro["fechaFinal"];
	echo "<tr>";
	echo "</tr>";
	if($unRegistro["realizada"] == 1)
	{
		echo "<td>$actividad</td>";
		echo "<td>$fecha</td>";
	}
}
echo "</table>";
?>