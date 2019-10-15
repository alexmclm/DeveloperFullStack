<?php

$user = $_GET['usuario'];
$pass = $_GET['pass'];

$conexion = mysqli_connect("localhost","root","","formulario");
$consulta = "select * from usuario where nombre = '$user' and password = '$pass'";

$resul_conexion = mysqli_query($conexion,$consulta);

	echo " Tarea: " ;
	echo "<table >
		<tr>
		<th> ID </th>	
		<th>USUARIO </th>
		<th>PASSWORD </th>
		</tr>";
while($registro = mysqli_fetch_array($resul_conexion)){
	$id = $registro['id'];
	$usuario = $registro['nombre'];
	$pass = $registro ['password'];

	echo "<tr>
		<td> $id </td>
		<td> $usuario</td>
		<td> $pass</td>
		<td><a href='clase7_1Editar.php?id=$id'>Editar</a></td>
 		
 		
	</tr>" ;
}











?>