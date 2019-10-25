<html>
	<head>
		<!-- de acuerdo al contenido de la variable "accion", escribimos el título -->
		<?php
/*echo "<h2>accion</h2>";
echo "<h1>";
echo $_GET["accion"];
echo "</h1>";
echo "<br>";
echo "<h2>id_usuario</h2>";
echo "<h1>";
echo $_GET["id_usuario"];
echo "</h1>";*/

if ($_GET["accion"] == "alta" and !empty($_GET["accion"])) {
    echo "<title>" . "Alta de tarea" . "</title>";
}

if ($_GET["accion"] == "baja" and !empty($_GET["accion"])) {
    echo "<title>" . "Baja" . "</title>";
}

if ($_GET["accion"] == "modificacion" and !empty($_GET["accion"])) {
    echo "<title>" . "Modificaci&oacute;n en agenda" . "</title>";
}

// la siguiente funcion busca un usuario en la base de datos devuelve true o false
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
				SELECT *
				FROM USUARIO
				WHERE USUARIO.usuario_id = "' . $id_usuario . '" and  USUARIO.pass = "' . $password . '" ';
    $resultado = mysqli_query($conexion, $sql);
    $rowcount  = mysqli_num_rows($resultado);

    if ($rowcount == 1) {
        echo "<br><br>";
        echo "logueo exitoso";
        $logueo = true;
        echo "<br><br>";

    } else {
        echo "<br><br>";
        echo "fallo logueo verifique su contraseña o su usuario";
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
if ($_GET["accion"] == "alta") {

    echo "<h1>";
    echo "entro en el GET: ", $_GET["id_usuario"];
    echo "</h1>";

    if (!empty($_GET["id_usuario"])) {
        $id_usuario = $_GET["id_usuario"];
    }

    echo "<h1>";
    echo "ANTES DEL FORMULARIO USUARIO: $id_usuario";
    echo "</h1>";

    echo "<h1>bienvenido al formulario para agregar una tarea usuario: $id_usuario</h1>";

// action="abm_tarea.php" method="POST">
    echo '
				<form action="abm_tarea.php" method="post">

					<h3>complete los siguientes campos para agregar una tarea</h3>


					<p>Su descripcion: <input type="text" name="descripcion" /></p>
					<p>Su contraseña de usuario: <input type="text" name="pass" /></p>
					<input type="hidden" name="accion" value="alta" />
					<input type="hidden" name="id_usuario" value="' . $id_usuario . '" />

					<br><br>

					<button type="submit">ingresar datos</button>
				</form>';
}

/////////////////////////////// ALTAS DE TAREAS (POST) ///////////////////////////////////////////
if ($_POST["accion"] == "alta") {

    echo "<h2> POST se ingresaran los siguientes datos: ";

    echo $_POST["id_usuario"], $_POST["pass"], $_POST["descripcion"];

    echo "</h2>";

    //$sql = "CREATE TABLE IF NOT EXISTS `tarea` (
    //`tarea_id` int NOT NULL AUTO_INCREMENT PRIMARY KEY,
    //`usuario_id` int NOT NULL,
    //`f_creacion` date NOT NULL,
    //`descripcion` varchar(100) NOT NULL,
    //`estado` bit(1) NOT NULL,
    //`f_fin`  date NOT NULL)";

    if (!empty($_POST["id_usuario"])) {
        $id_usuario = $_POST["id_usuario"];
    }

    $pass        = $_POST["pass"];
    $descripcion = $_POST["descripcion"];

    $conexion = mysqli_connect('localhost', 'root', '', 'clase7');

    if (buscar_usuario($id_usuario, $pass, $conexion)) {
        $fecha = date("Y-m-d");
        $sql   =
            'INSERT INTO tarea (usuario_id, f_creacion, descripcion, estado)
	         VALUES ("' . $id_usuario . '", "' . $fecha . '", "' . $descripcion . '", 1)
	        		';
        if ($conexion->query($sql) === true) {
            echo "<h2><br><br>registro completo, se ah insertado los siguientes datos:<br><br></h2>";

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

        } else {
            echo "Hubo un error al intentar insertar en la tabla TAREA<br><br>" /* . $conn->error*/;
            echo mysql_errno($conexion) . ": " . mysql_error($conexion) . "\n";
        }

    }

}

/////////////////////////////// BAJA DE TAREAS (GET) ///////////////////////////////////////////

if ($_GET["accion"] == "baja") {
    echo "<h1>BAJA DE TAREAS (GET)</h1>";

    $id_tarea   = $_GET["tarea_id"];
    $id_usuario = $_GET["id_usuario"];

    echo '
				<form action="abm_tarea.php" method="post">

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
if ($_POST["accion"] == "baja") {
    echo "<h1>BAJA DE TAREAS (POST)</h1>";

    echo "<h2> usuario: </h2>";
    echo $_POST["id_usuario"], $_POST["accion"], $_POST["pass"];

    $id_usuario = $_POST["id_usuario"];
    $password   = $_POST["pass"];
    $id_tarea   = $_POST["id_tarea"];
    $conexion   = mysqli_connect('localhost', 'root', '', 'clase7');

    $se_logueo = buscar_usuario($id_usuario, $password, $conexion);

    if ($se_logueo) {

        echo "<h2> se borrara la tarea: $id_tarea</h2>";

        $sql = 'DELETE  FROM `tarea` WHERE tarea.tarea_id = ' . "$id_tarea";

        echo $sql;

        if ($conexion->query($sql) === true) {
            echo "<h2>se borro la tarea seleccionada</h2>";
        } else {
            echo "<h2>ocurrio un error</h2>";
        }

    }
}

///////////////////////////// modificar /////////////////////////////

if ($_GET["accion"] == "modificar"){

     echo "<h1>BAJA DE TAREAS (GET)</h1>";

    $id_tarea   = $_GET["tarea_id"];
    $id_usuario = $_GET["id_usuario"];

    $sql = 'SELECT *
            FROM TAREA
            WHERE   TAREA.tarea_id ='.$id_tarea;

    $conexion   = mysqli_connect('localhost', 'root', '', 'clase7');

    $resultado = mysqli_query($conexion,$sql);

    $registro   = mysqli_fetch_array($resultado);
    $descripcion = $registro["descripcion"];



    echo '
                <form action="abm_tarea.php" method="post">

                    <h2>ingrese su contraseña para modificar la tarea</h2>
                    <p>Descripcion de tarea: <input type="text" name="descripcion" value="'.$descripcion.'"/></p>
                    <p>Ingrese su contraseña: <input type="text" name="pass" /></p>
                    <input type="hidden" name="accion" value="modificar" />
                    <input type="hidden" name="id_usuario" value="' . "$id_usuario" . '" />
                    <input type="hidden" name="id_tarea" value="' . "$id_tarea" . '" />

                    <br><br>

                    <button type="submit">ingresar datos</button>
                </form>';

}

if($_POST["accion"] == "modificar"){


    echo "<h1>SE MODIFICO LA TAREA (POST)</h1>";

    echo "<h2> usuario: </h2>";
    echo $_POST["id_usuario"], $_POST["accion"], $_POST["pass"];

    $id_usuario = $_POST["id_usuario"];
    $password   = $_POST["pass"];
    $id_tarea   = $_POST["id_tarea"];
    $descripcion = $_POST["descripcion"];

    $conexion   = mysqli_connect('localhost', 'root', '', 'clase7');

    $se_logueo = buscar_usuario($id_usuario, $password, $conexion);

    if ($se_logueo) {

        echo "<h2> se modificara la tarea: $id_tarea</h2>";

        $sql = 'UPDATE TAREA SET tarea.descripcion = "'.$descripcion.'" WHERE tarea_id = '.$id_tarea;

        echo $sql;

        if ($conexion->query($sql) === true) {
            echo "<h2>se borro la tarea seleccionada</h2>";
        } else {
            echo "<h2>ocurrio un error</h2>";
        }

    }


    $sql = 'SELECT *
            FROM tarea
            WHERE tarea_id = id_tarea';

    if ($conexion->query($sql) === true) {
            echo "<h2>tarea a modificar</h2>";
        } else {
            echo "<h2>ocurrio un error al intentar modificar una tarea</h2>";
        }

}

?>
</body>