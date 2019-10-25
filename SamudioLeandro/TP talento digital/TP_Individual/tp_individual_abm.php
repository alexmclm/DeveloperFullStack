<html>
	<head>
<?php

    if ($_GET["accion"] == "Alta" and !empty($_GET["accion"])) {
    echo "<title>" . "Alta_de_Tarea" . "</title>";
}

    if ($_GET["accion"] == "Baja" and !empty($_GET["accion"])) {
    echo "<title>" . "Baja_de_Tarea" . "</title>";
}

    if ($_GET["accion"] == "Modificacion" and !empty($_GET["accion"])) {
    echo "<title>" . "Modificacion_de_Tarea" . "</title>";
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

// action="Tp_Individual_ABM.php" method="POST">
    echo '
				<form action="Tp_Individual_ABM.php" method="post">

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

    $password        = $_POST["password"];
    $descripcion = $_POST["descripcion"];

    $conexion = mysqli_connect('localhost', 'root', '', 'Base_De_Datos');

    if (buscar_usuario($id_usuario, $password, $conexion)) {
        $fecha = date("Y-m-d");
        $sql   =
            'INSERT INTO tarea (usuario_id, f_creacion, descripcion, estado)
	         VALUES ("' . $id_usuario . '", "' . $fecha . '", "' . $descripcion . '", 1)
	        		';
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

/////////////////////////////// BAJA DE TAREAS (GET) ///////////////////////////////////////////

    if ($_GET["accion"] == "Baja") {
    echo "<h1>BAJA DE TAREAS (GET)</h1>";

    $id_tarea   = $_GET["tarea_id"];
    $id_usuario = $_GET["id_usuario"];

    echo '
				<form action="Tp_Individual_ABM" method="post">

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

///////////////////////////// modificar /////////////////////////////

    if ($_GET["accion"] == "Modificar"){
    echo "<h1>BAJA DE TAREAS (GET)</h1>";

    $id_tarea   = $_GET["tarea_id"];
    $id_usuario = $_GET["id_usuario"];

    $sql = 'SELECT * FROM TAREA
            WHERE TAREA.tarea_id ='.$id_tarea;

    $conexion   = mysqli_connect('localhost', 'root', '', 'Base_De_Datos');

    $resultado = mysqli_query($conexion,$sql);
    $registro   = mysqli_fetch_array($resultado);
    $descripcion = $registro["descripcion"];

    echo '
                <form action="Tp_Individual_ABM" method="post">

                    <h2>Ingrese su contraseña para modificar la tarea</h2>
                    <p>Descripcion de tarea: <input type="text" name="descripcion" value="'.$descripcion.'"/></p>
                    <p>Ingrese su contraseña: <input type="text" name="password" /></p>
                    <input type="hidden" name="accion" value="modificar" />
                    <input type="hidden" name="id_usuario" value="' . "$id_usuario" . '" />
                    <input type="hidden" name="id_tarea" value="' . "$id_tarea" . '" />
                    <br><br>
                    <button type="submit">Ingresar datos</button>
                </form>';
}

if($_POST["accion"] == "Modificar"){

    echo "<h1>SE MODIFICO LA TAREA (POST)</h1>";
    echo "<h2> usuario: </h2>";
    echo $_POST["id_usuario"], $_POST["accion"], $_POST["password"];

    $id_usuario = $_POST["id_usuario"];
    $password   = $_POST["password"];
    $id_tarea   = $_POST["id_tarea"];
    $descripcion = $_POST["descripcion"];

    $conexion   = mysqli_connect('localhost', 'root', '', 'Base_De_Datos');
    $se_logueo = buscar_usuario($id_usuario, $password, $conexion);

    if ($se_logueo) {
    echo "<h2> Se modificara la tarea: $id_tarea</h2>";

    $sql = 'UPDATE TAREA SET tarea.descripcion = "'.$descripcion.'" WHERE tarea_id = '.$id_tarea;
    echo $sql;

    if ($conexion->query($sql) === true) {
    echo "<h2>Se ha eliminado la tarea seleccionada</h2>";
    } 
    else {
    echo "<h2>Ocurrio un error inesperado</h2>";
    }
}
    
    $sql = 'SELECT * FROM tarea
            WHERE tarea_id = id_tarea';

    if ($conexion->query($sql) === true) {
    echo "<h2>Tarea a modificar</h2>";
    } 
    else {
    echo "<h2>Ocurrio un error al intentar modificar una tarea</h2>";
    }
}
?>
</body>
</html>