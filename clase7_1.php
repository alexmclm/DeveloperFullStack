<?php


$conexion = mysqli_connect("localhost","root","","tareastodo");
$consulta = "select id,nombreUser,email from usuario ";

$resul_conexion = mysqli_query($conexion,$consulta);


	echo "<table >
		<tr>
		<th> ID </th>	
		<th>USUARIO </th>
	
		</tr>";
while($registro = mysqli_fetch_array($resul_conexion)){
	$id = $registro['id'];
	$usuario = $registro['nombreUser'];
	// $pass = $registro ['password'];
	$email = $registro['email'];
	echo "<tr>
		<td> $id </td>
		<td> $usuario</td>
		<td> $email </td>
		<td><a href='clase7_1Editar.php?id=$id'>Editar</a></td>
 		
 		
	</tr>" ;
}











?>