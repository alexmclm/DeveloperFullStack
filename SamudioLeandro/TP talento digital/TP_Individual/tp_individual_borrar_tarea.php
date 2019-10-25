<html>
	<head>
<?php

    if ($_GET["accion"] == "Baja" and !empty($_GET["accion"])) {
    echo "<title>" . "Baja_de_Tarea" . "</title>";
}

// La siguiente funcion busca un usuario en la base de datos devuelve true o false:
function buscar_usuario($id_usuario, $password, $conexion)
{
    echo "<h1>";
    echo "funcion buscar usuario";
    echo "</h1>";
    echo "<h1>";
    echo $id_usuario;
    echo "</h1>";
    echo "<h1>";
    echo $password;
    echo "</h1>";

$sql = '
				SELECT * FROM USUARIO
				WHERE USUARIO.usuario_id = "' . $id_usuario . '" and  USUARIO.password = "' . $password . '" ';
    $resultado = mysqli_query($conexion, $sql);
    $rowcount  = mysqli_num_rows($resultado);

    if ($rowcount == 1) {
        echo "<br><br>";
        echo "Se ha logueado correctamente";
        $logueo = true;
        echo "<br><br>";

    } else {
        echo "<br><br>";
        echo "Ocurrio un fallo al loguearse, verificar los datos ingresados";
        echo "<br><br>";
        $logueo = false;
}
    return $logueo;
}

?>
	</head>
	<body>

<?php

/////////////////////////////// BAJA DE TAREAS (GET) ///////////////////////////////////////////

    if ($_GET["accion"] == "Baja") {
    echo "<h1>BAJA DE TAREAS (GET)</h1>";

    $id_tarea   = $_GET["tarea_id"];
    $id_usuario = $_GET["id_usuario"];

    echo '
				<form action="tp_individual_borrar_tarea" method="post">

					<h2>ingrese su contraseña para eliminar la tarea</h2>
					<p>Su contraseña de usuario: <input type="text" name="pass" /></p>
					<input type="hidden" name="accion" value="baja" />
					<input type="hidden" name="id_usuario" value="' . "$id_usuario" . '" />
					<input type="hidden" name="id_tarea" value="' . "$id_tarea" . '" />
					<br><br>
					<button type="submit">ingresar datos</button>
				</form>';
}

//////////////////////// baja de tareas POST /////////////////////////
    
    if ($_POST["accion"] == "Baja") {
    echo "<h1>BAJA DE TAREAS (POST)</h1>";
    echo "<h2> usuario: </h2>";
    echo $_POST["id_usuario"], $_POST["accion"], $_POST["password"];

    $id_usuario = $_POST["id_usuario"];
    $password   = $_POST["password"];
    $id_tarea   = $_POST["id_tarea"];
    $conexion   = mysqli_connect('localhost', 'root', '', 'Base_De_Datos');

    $se_logueo = buscar_usuario($id_usuario, $password, $conexion);

    if ($se_logueo) {
    echo "<h2> Se borrara la tarea: $id_tarea</h2>";

    $sql = 'DELETE  FROM `tarea` WHERE tarea.tarea_id = ' . "$id_tarea";

    echo $sql;

    if ($conexion->query($sql) === true) {
        echo "<h2>Se ha eliminado la tarea seleccionada</h2>";
        } else {
        echo "<h2>Ocurrio un error inesperado</h2>";
        }
}
?>
</body>
</html>