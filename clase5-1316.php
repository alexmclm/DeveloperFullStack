<?php 
// lo que hare sera insertar a la base de datos informacion usando ademas las cajas de texto en el html
$tarea = $_POST['tarea'];
$tareaRealizada =$_POST['tareaRealizada'];
// $fechaRealizada = $_POST['fechaRealizada'];
$fechaActual = date("Y/m/d");

// el trim elimina espacios en un string inicio-fin
$tarea_trim = trim($tarea);
$tareaRealizada_trim = trim($tareaRealizada);

// if (!isset($_POST['tarea']) || empty($_POST['tarea']) ){
// 	die("no entro por aca tarea");
// }
// if (!isset($_POST['tareaRealizada'])|| empty($_POST['tareaRealizada'])){


// 	die("no entro por aca realizada");
// }
// if (!isset($_POST['fechaRealizada']) || empty($_POST['fechaRealizada'])){
// 	die("no entro por aca fecha");
// }



// ESTE EJEMPLO ESTA PARA EL TRIM! ----------------------------------------------------------------------------
  


// if (!isset($tarea_trim) || empty($tarea_trim) ){
// 	die("no entro por aca tarea");
// }
// if (!isset($tareaRealizada_trim)|| empty($tareaRealizada_trim)){


// 	die("no entro por aca realizada");
// }
// if (!isset($_POST['fechaRealizada']) || empty($_POST['fechaRealizada'])){


// 	die("no entro por aca fecha");
// }


// $conexion = mysqli_connect("localhost:3306","root","","tareastodo");
// $darDeAlta ="insert into tareas (tarea,tareaRealizada,fecha_realizada) values ('$tarea_trim','$tareaRealizada_trim','$fechaRealizada')";
// ----------------------------------------------------------------------------------------------------------




$conexion = mysqli_connect("localhost:3306","root","","tareastodo");
$darDeAlta ="insert into tareas (tarea,tareaRealizada,fecha_realizada) values ('$tarea','$tareaRealizada','$fechaActual')";
$respuesta_consulta = mysqli_query($conexion,$darDeAlta);





// ya que $respuesta_consulta devuelve un valor booleano debe terminar ahi el proceso y muere mostrando 
if($respuesta_consulta == false){
	// -- echo $conexion; para ver lo que devuelve la conexion
	// echo $darDeAlta; LO QUE HACE CESTO ES MOSTRAR LO QUE DEVUELVE EL $DARDEALTA
	die("hubo un error a la hora de inyectar informacion a la base de datos");
}
echo "informacion subida con exito";
?>