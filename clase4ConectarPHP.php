<ul>
	<li>Nombre</li>
	<li>Apellido</li>
	<li>Jaja</li>

</ul>>
<!-- para utilizar esto dentr ode la base de datos, y separarlo correctamente se coloca antes del while -->

<table> <!--  ahora lo mostraremos en una tabla  -->

	<!-- el tr parte de la tabla -->
<!-- 	<tr> -->
	<!-- el th es el encabezado  -->
	<!-- 	<th>  -->
			


<!-- 		</th>
 -->
	<!-- </tr>>	
 -->






<!-- pasos_
		Conectar
		hacer Consulta
		mostrar informacion
		 -->
<?php
// mysqli_connect (importante el 'i')(localHost:3307 o la ip 127.0.0.1 -- root -- " " -- )
$conexion = mysqli_connect("localHost:3306", "root", "", "agendaclase4" );
// 1erParametro : $conexion -- 2doParametor: tipoConsulta o lo puedo hacer por separado por parametro
$sql = "select * from contacto";
$consulta = mysqli_query($conexion,$sql);
// ahora como mostrar mediante el php los datos de la base de datos
// por funcion particular

			// devuelve un vector esto:
// $registro = mysqli_fetch_array($consulta); 

// print_r($registro);
/* cuestion de que el print_r hace la funcion de echo, pero precisamente esta funcion esta hecha para los registros 
y como $registro es una array ...*/

// ESTO ES ETIQUETAS DEL HTML 
// <br> </br> son para saltos de linea
// echo "<table>";
// echo "<tr> <th>Todas las actividades</th></tr>";


/*echo $registro["nombre"];
echo ",";
echo $registro["apellido"];
echo "<br>";
PERO ESTO ES MEDIO EMBORROSO, MAS FACIL INCLUIR TODO POR VARIABLES
*/
/*$nombre = $registro["nombre"];
$apellido = $registro["apellido"];
echo "$nombre , $apellido <br>";
PERO SIGUE SIENDO EMBORROSO POR QUE SOLO TRAE UN REGISTRO POR VEZ
*/


// echo "<ul>";  lo que hace le ul, es dejar sangria , para listas
echo "<table border =1>";
echo "<tr>";
	echo "<th> Nombre </th>";
	echo "<th> Apellido </th>";
echo "</tr>";

while ( $registro = mysqli_fetch_array($consulta) ) {



$nombre = $registro["nombre"];
$apellido = $registro["apellido"];

echo "<tr>";
echo "<td> $nombre </td>";
echo "<td> $apellido </td>"; //<li></li> lo que hace el li es separar por puntos 
echo "</tr>";
}


echo "</table>"
?>
