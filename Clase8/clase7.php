
<?php
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
	$fechaRe= $registro['fecha_realizada'];

	echo "<tr>
		<td> $id </td>
		<td> $tarea</td>
		<td> $fechaRe</td>
		<td><a href='clase7Editar.php?id=$id'>Editar</a></td>
 		
 		
	</tr>" ;
}

echo "</table>"


  ?> 