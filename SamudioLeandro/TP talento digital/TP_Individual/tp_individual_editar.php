<html>
	<head>
<?php

	if ($_GET["accion"] == "Editar" and !empty($_GET["accion"])) {
    echo "<title>" . "Edicion_de_Tarea" . "</title>";
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

///////////////////////////// MODIFICAR /////////////////////////////

    if ($_GET["accion"] == "Editar"){
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
                <form action="tp_individual_editar" method="post">
                    <h2>Ingrese su contraseña para modificar la tarea</h2>
                    <p>Descripcion de tarea: <input type="text" name="descripcion" value="'.$descripcion.'"/></p>
                    <p>Ingrese su contraseña: <input type="text" name="password" /></p>
                    <input type="hidden" name="accion" value="editar" />
                    <input type="hidden" name="id_usuario" value="' . "$id_usuario" . '" />
                    <input type="hidden" name="id_tarea" value="' . "$id_tarea" . '" />
                    <br><br>
                    <button type="submit">Ingresar datos</button>
                </form>';
}

if($_POST["accion"] == "Editar"){

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
    echo "<h2>Ocurrio un error al intentar editar una tarea</h2>";
    }
}
?>
</body>
</html>