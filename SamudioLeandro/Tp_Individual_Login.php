<!DOCTYPE html>
<html>
<head>
	<title> Trabajo Practico Talento Digital </title>
	<meta charset="utf-8">
</head>

<body style = "text-align: center" >
<h1>Login: <br></h1>

<!--Ingreso de datos del usuario -->

<form action = "Tp_Individual_Login.php" method="POST">

<p>Ingresar Usuario: <input type="text" name="usuario"/></p>
<p>Ingresar Contraseña: <input type="text" name="password" /></p>
 <!--<p>Su nombrecompleto: <input type="text" name="nombre" /></p>
 <p>Su mail: <input type="mail" name="mail" /></p>-->

<button type="submit"> Ingresar </button>
</form>

<a href="Alta_de_usuario.php">
<h2><br>Registrarse!</h2>
</a>

<?php

if (!isset($_POST['usuario']) and !isset($_POST['password'])) {
    //Validación por cuestiones de seguridad:
    die("no se logro linkear las variables");
}

$vacio = false;

$vacio = (empty($_POST['usuario']) and trim($_POST['usuario']) == "");

if ($vacio) {

    echo "No se ingreso correctamente el usuario <br><br>";

}

$vacio = (empty($_POST['password']) and trim($_POST['password']) == "");

if ($vacio) {

    echo "No se ingreso correctamente el password <br><br>";
}

if ($vacio) {
    die("Error! No se ingresaron algunos de los datos solicitados");
}

$conexion = mysqli_connect("localhost", "root", "", "Base_De_Datos") or die("No funca");

echo "<h1> Se realizo la conexion </h1>"

$usuario = $_POST ['usuario'];
$pass = $_POST ['password'];

$sql = 'SELECT * FROM USUARIO
WHERE USUARIO.usuario = "' .$usuario. '" and USUARIO.pass = "' . $password . '" ';


$resultado = mysqli_query ($conexion, $sql);

$rowcount = mysqli_query ($resultado)

$logueo = true;

if ($rowcount == 1) {
	echo "<h2>";
	echo "Se ha logueado con éxito!"
	echo "</h2>";

	$registro = mysqli_fetch_array ($resultado);
	$id_usuario = $registro ["usuario_id"];


} else {
	echo "<h2>";
	echo "Falló su logueo por favor verificar si ingreso correctamente su usuario y/o contraseña"
	echo "</h2>";	

$logueo = false;

}

if ($logueo) {

    echo "<h2> tareas correspondientes al usuario: $usuario</h2>";

// Referenciar al archivo "Alta_baja_modificacion"	echo "<h3> <a href='abm_tarea.php?accion=alta&id_usuario=$id_usuario'>Agregar tarea</a> <br></h3>";

$sql =
        'SELECT *
         FROM USUARIO, TAREA
         WHERE USUARIO.usuario_nombre = "' . $usuario . '" and  USUARIO.usuario_id = TAREA.usuario_id';

$resultado = mysqli_query($conexion, $sql);

    echo "<table border=1 style=" . '"margin: 0 auto;"' . ">";

    echo "<tr>";
    echo "<th>tarea</th>";
    echo "<th>usuario id</th>";
    echo "<th>fecha creacion de tarea</th>";
    echo "<th>descripcion</th>";
    echo "<th>estado</th>";
    echo "<th>fecha de fin</th>";
    echo "</tr>";

    while ($unRegistro = mysqli_fetch_array($resultado)) {

        $tarea_id    = $unRegistro["tarea_id"];
        $usuario_id  = $unRegistro["usuario_id"];
        $f_creacion  = $unRegistro["f_creacion"];
        $descripcion = $unRegistro["descripcion"];
        $estado      = $unRegistro["estado"];
        $f_fin       = $unRegistro["f_fin"];

        echo "<tr>";
        echo "<td>$tarea_id</td>";
        echo "<td>$usuario_id</td>";
        echo "<td>$f_creacion</td>";

// echo "<td> $descripcion <a href='abm_tarea.php?accion=modificar&tarea_id=" . $tarea_id . "&id_usuario=" . $usuario_id . "&descripcion=" . $descripcion . "'>modificar</a>
//        <a href='abm_tarea.php?accion=baja&tarea_id=" . $tarea_id . "&id_usuario=" . $usuario_id . " ' onclick=" . '"return confirm()"' . ">borrar</a></td>";

if ($estado) {
            $estado_tarea = "En proceso";
        } else {
            $estado_tarea = "Finalizada";
        }
        echo "<td>$estado_tarea</td>";
        echo "<td>$f_fin</td>";
        echo "</tr>";

?>

</body>
</html>