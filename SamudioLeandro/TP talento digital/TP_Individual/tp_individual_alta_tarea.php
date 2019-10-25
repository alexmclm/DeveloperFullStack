<html>
	<head>
<?php

	if ($_GET["accion"] == "Alta" and !empty($_GET["accion"])) {
 	echo "<title>" . "Alta_de_Tarea" . "</title>";
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

// Acá mostramos la pantalla de carga de ALTAS.
/////////////////////////////// ALTAS DE TAREAS (GET) ///////////////////////////////////////////

    if ($_GET["accion"] == "Alta") {
	echo "<h1>";
    echo "Entro en el GET: ", $_GET["id_usuario"];
    echo "</h1>";

    if (!empty($_GET["id_usuario"])) {
        $id_usuario = $_GET["id_usuario"];
    }

    echo "<h1>";
    echo "ANTES DEL FORMULARIO USUARIO: $id_usuario";
    echo "</h1>";
    echo "<h1>Bienvenido al formulario para agregar una tarea usuario: $id_usuario</h1>";

// action="tp_individual_alta_tarea.php" method="POST">
    echo '
				<form action="tp_individual_alta_tarea.php" method="post">
					<h3>Complete los siguientes campos para agregar una tarea:</h3>
					<p>Su descripcion: <input type="text" name="descripcion" /></p>
					<p>Su contraseña de usuario: <input type="text" name="pasword" /></p>
					<input type="hidden" name="accion" value="Alta" />
					<input type="hidden" name="id_usuario" value="' . $id_usuario . '" />
					<br><br>
					<button type="submit">Ingresar datos:</button>
				</form>';
}

/////////////////////////////// ALTAS DE TAREAS (POST) ///////////////////////////////////////////
    
    if ($_POST["accion"] == "Alta") {
    echo "<h2> POST se ingresaran los siguientes datos: ";
    echo $_POST["id_usuario"], $_POST["password"], $_POST["descripcion"];
    echo "</h2>";

    if (!empty($_POST["id_usuario"])) {
        $id_usuario = $_POST["id_usuario"];
    }

    $password = $_POST["password"];
    $descripcion = $_POST["descripcion"];
    $conexion = mysqli_connect('localhost', 'root', '', 'Base_De_Datos');

    if (buscar_usuario($id_usuario, $password, $conexion)) {
        $fecha = date("Y-m-d");
        $sql   =
            'INSERT INTO tarea (usuario_id, f_creacion, descripcion, estado)
	         VALUES ("' . $id_usuario . '", "' . $fecha . '", "' . $descripcion . '", 1)';

    if ($conexion->query($sql) === true) {
    echo "<h2><br><br>El registro fue completado con exito, se han insertado los siguientes datos:<br><br></h2>";

////////////////////////////////////////////////////////////////////

    echo "<table border=1>";
    echo "<tr>";
    echo "<th>usuario id</th>";
    echo "<th>fecha creacion tarea</th>";
    echo "<th>descripcion</th>";
    echo "<th>estado</th> ";
    //echo "<th>fecha de finalizacion</th>";
    echo "</tr>";
    /*if ($estado) {
    $estado_tarea = "en proceso";
    } else {
    $estado_tarea = "finalizada";
    }*/
    echo "<tr>";
    echo "<td>$id_usuario</td>";
    echo "<td>$fecha</td>";
    echo "<td>$descripcion</td>";
    echo "<td>en proceso</td>";
    //echo "<td>$f_fin</td>";
    echo "</tr>";
    echo "</table>";
    echo "<br><br>";

///////////////////////////////////////////////////////////////////
} 
  else {
        echo "Hubo un error al intentar insertar en la tabla TAREA<br><br>" /* . $conn->error*/;
        echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
        }
}
}
?>
</body>
</html>