<?php
$fecha= date("Y-m-d");
echo $fecha;
//include("conexion.php");
/*$todayh= getdate();
$d = $todayh[mday];
$m = $todayh[mon];
$y = $todayh[year];

echo $d,$m,$y;*/
/*
$fecha= date("Y-m-d");

if(isset($_POST['tarea1']) == false){ //validacion por cuestion de seguridad
	echo "no existe campo";
	die("no se ingreso tarea");
}

if (trim(($_POST['tarea1'])) == ""){

	echo "solo espacios";
	die();
}

if(empty($_POST['tarea1'])){
	echo "<br><br> no se ingresaron datos";
	die("<br> <br> muere no se completo campo");
}

$tarea = $_POST['tarea1'];
$conexion = mysqli_connect("localhost", "root", "", "to-do");*/

//----------------- script SQL ------------------------------


$conexion = mysqli_connect("localhost","root","") or die("murio<br><br>");
echo "se establecio la conexion";
echo"<br><br>";

$nombreBaseDatos = "clase7";

$sql = "CREATE DATABASE $nombreBaseDatos";

if (mysqli_select_db($conexion, $nombreBaseDatos)){
  echo "la base de datos ya estaba creada<br><br>";
}else{
  if ($conexion->query($sql)===true){
    echo "se creo base de datos $nombreBaseDatos<br><br>";
    mysqli_select_db($conexion, $nombreBaseDatos);
  }else{
    mysqli_close($conexion);
    die("error al crear base de datos<br><br>");
  }

}



//$conexion = mysqli_connect("localhost","root","$nombreBaseDatos");


//----------- creo tabla de usuario (id, nombre, password, mail, fecha creacion)



$sql = "CREATE TABLE IF NOT EXISTS `usuario` (
`usuario_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`usuario_nombre` varchar(80) NOT NULL UNIQUE,
`pass` varchar(100) NOT NULL,
`mail` varchar(50) NOT NULL,
`f_creacion` date NOT NULL,
`nombre_apellido` varchar (50) NOT NULL)";


/*`nombre_apellido` varchar(100)*/

// importante poner comillas en las variables de sql -> `var` tipo, bla bla bla

//$conexion->exec($consulta)

//if($conexion->errno) die($conexion->error);

echo $sql;
  
if ($conexion->query($sql) === TRUE) {
    echo "la tabla USUARIO ha sido creado<br><br>";
 } else {
    echo "Hubo un error al crear la tabla usuarios<br><br>"/* . $conn->error*/;
    echo mysql_errno($conexion) . ": " . mysql_error($conexion). "\n";
}
    //echo "Hubo un error al crear la tabla alumnos: " . $conexion->error;
    //die(mysql_error($conexion));

    //echo mysql_errno($conexion) . ": " . mysql_error($conexion). "\n";

/*$sql = "CREATE TABLE IF NOT EXISTS `indice_x_usuario` (
`usuario_id` int NOT NULL PRIMARY KEY AUTO_INCREMENT,
`usuario_nombre` varchar(80) NOT NULL)";

if ($conexion->query($sql) === TRUE) {
    echo "la tabla INDICE_X_USUARIO ha sido creado<br><br>";
 } else {
    echo "Hubo un error al crear la tabla usuarios<br><br>"/* . $conn->error*/
    //echo mysql_errno($conexion) . ": " . mysql_error($conexion). "\n";
//}


/*$sql = "ALTER TABLE `usuario` ADD (`nombre_apellido` varchar(100) NOT NULL)";

if ($conexion->query($sql) === TRUE) {
    echo "la tabla USUARIO ha sido modificada se agrego el campo nombre y apellido <br><br>";
  } else {
    echo "Hubo un error al modificar la tabla usuario<br><br>"/* . $conn->error;
    echo mysql_errno($conexion) . ": " . mysql_error($conexion). "\n";
}

*/

/*$sql="SHOW COLUMNS FROM usuario";

$result = mysqli_query($conexion, $sql);

//while ($row = mysql_fetch_row($result)){ 
//       echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
//} 

echo "<table border = '1'> \n"; 
echo "<tr><td>Nombre</td><td>E-Mail</td></tr> \n"; 
while ($row = mysql_fetch_row($result)){ 
       echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n"; 
} 
echo "</table> \n"; 
*/

//------------ creo tabla tarea (ID, usuario_id, creacion, descripcion, fin)----------------------



$sql = "CREATE TABLE IF NOT EXISTS `tarea` (
`tarea_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
`usuario_id` int NOT NULL,
`f_creacion` date NOT NULL,
`descripcion` varchar(100) NOT NULL,
`estado` bit(1) NOT NULL,
`f_fin`  date NOT NULL)";

if ($conexion->query($sql) === TRUE) {
    echo "la tabla TAREA ha sido creado<br><br>";
  } else {
    echo "Hubo un error al crear la tabla usuarios<br><br>"/* . $conn->error*/;
    echo mysql_errno($conexion) . ": " . mysql_error($conexion). "\n";
}

//-------------------------------------------

// se agrega fk al campo (usuario_id) de la tabla indice_x_usuario para que se relacione
// con la tabla usuario en donde (usuario_id) es PK

/*$sql = "ALTER TABLE `indice_x_usuario` 
ADD CONSTRAINT `fk_usuario_id` 
FOREIGN KEY (`usuario_nombre`)
REFERENCES `usuario` (`usuario_nombre`)";

if ($conexion->query($sql) === TRUE) {
    echo "se agrego la constraint fK_usuario_nombre a la tabla INDICE_X_USUARIO<br><br>";
  } else {
    echo "Hubo un error al crear la tabla usuarios<br><br>"/* . $conn->error*///;
 //   echo mysql_errno($conexion) . ": " . mysql_error($conexion). "\n";
//}

//------------------------------------------------------

$sql = "ALTER TABLE `tarea` ADD CONSTRAINT `fK_usuario_id` 
FOREIGN KEY (`usuario_id`)
REFERENCES `usuario` (`usuario_id`)";

if ($conexion->query($sql) === TRUE) {
    echo "Se agrego la constraint fK_usuario_nombre a la tabla TAREA<br><br>";
  } else {
    echo "Hubo un error al crear la tabla usuarios<br><br>"/* . $conn->error*/;
    echo mysql_errno($conexion) . ": " . mysql_error($conexion). "\n";
}


//------------ creo tabla usu_x_tabla -------------------------------

// no es necesario solo para relacion muchos a muchos
/*
$sql = "CREATE TABLE IF NOT EXISTS `usu_x_tabla` (
usuario_id int;
tarea_id int;
)";

if ($conexion->query($sql) === TRUE) {
    echo "la tabla TAREA ha sido creado";
  } else {
    echo "Hubo un error al crear la tabla usuario"/* . $conn->error;
}
*/
//-----------------------------------------------------
/*
$sql = "INSERT INTO `usuario` (usuario_id, nombre, apellido, f_nacimiento) 
        VALUES (ariel@gmail.com, ari, gonz,02/02/02);";


  
if ($conexion->query($sql) === TRUE) {
    echo "se inserto usuario nuevo";
  } else {
    echo "Hubo un error al insertar en la tabla usuario"/* . $conn->error;
}

//----------------------------------------------------------

$sql = 'insert into tarea (tarea,fecha_realizada) values("'.$tarea.'","'.$fecha.'")';

/*if(is_int($tarea)){

}*/

/*

$respuesta_consulta = mysqli_query($conexion, $sql);
if ($respuesta_consulta == false) {
 printf("Connect failed: %s\n", $conexion->connect_error);
 die("No se pudo ingresar el registro en la base de datos");
}
echo "Registro ingresado :-)";*/


?>