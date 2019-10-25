<?php 
$id = $_GET['id'];

$conexion = mysqli_connect("localhost","root","","tareastodo1");
$sqlBorrado = "DELETE FROM tareas WHERE id = '$id'";
$rta = mysqli_query($conexion,$sqlBorrado);

if ($rta == TRUE) {
 // if(isset($_GET('tarea')) && isset($_GET['fechaRealizada'])){
    header('Location: listaTareas.php');
}  
else{
    die("No se ha podido borrar la tarea");
}
?>



































//$id = $_GET["id"];
//$conexion = mysqli_connect("localhost:3307", "root", "", "to_do");
//$sql = "delete from tareas where id = '$id'";
//$consulta = mysqli_query($conexion,$sql);
//if ($consulta == true) {
 //   $tarea = "";
  //  $finalizada = "";
   // if (isset($_GET["tarea"]) or isset($_GET["finalizada"])) {
    //    $tarea = $_GET["tarea"];
     //   $finalizada = $_GET["finalizada"];
   // }
    //header("Location:listado.php?tarea=$tarea&finalizada=$finalizada");
//}
//else{
  //  die("Error");
//}
