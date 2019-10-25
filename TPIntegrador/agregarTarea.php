<?php 
session_start();
$tarea = $_POST['tarea'];
$tareaFinalizda = $_POST['tareaRealizada'];
$fechaRealizada = date("Y/m/d");

$tarea_trim = trim($tarea);

if(!isset($tarea_trim)|| empty($tarea_trim)){
	die("por favor ingrese alguna tarea");
}
if(!isset($tareaFinalizda)){
	die("escriba si la tarea esta finalizada o no");
}
$conexion = mysqli_connect("localhost","root","","tareastodo");
$darAlta = "insert into tareas (tarea,tareaRealizada,fechaRealizada) values ('$tarea_trim','$tareaFinalizda','$fechaRealizada')";
echo mysqli_error($conexion);
$resu_alta = mysqli_query($conexion,$darAlta);

if($resu_alta == false){
	die("hubo un problema a la hora de inectar en la base de datos");
}
echo "guardado con exito";







 ?>