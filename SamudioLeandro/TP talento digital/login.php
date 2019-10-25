<!DOCTYPE html>
<html>
<head >

    <title> clase 5 </title>
    <meta charset="utf-8">




</style>


</head>
<!-- background="img/slack.jpg" background-repeat: repeat-x;-->
<body style="text-align: center;"  >




    <!--<a href="abm.php?accion=modificacion">Modificar</a> <br>
    <a href="abm.php?accion=baja">Borrar</a> <br>-->


    <h1>Login <br><br></h1>
    <form action="login.php" method="post">

 <p>Su usuario: <input type="text" name="usuario" /></p>
 <p>Su contraseña: <input type="text" name="pass" /></p>
 <!--<p>Su nombrecompleto: <input type="text" name="nombre" /></p>
 <p>Su mail: <input type="mail" name="mail" /></p>-->

 <!--<label>Tarea
 <input type="text" name="tarea1" >
 </label>-->



 <!--<p><input type="submit" /></p>-->


 <button type="submit">ingresar</button>
</form>

<a  href="alta_usuario.php">
    <h3>registrarme</h3>
</a>
<br>

<?php

//echo $_POST['usuario'], $_POST['pass'];

if (!isset($_POST['usuario']) and !isset($_POST['pass'])) {
    //validacion por cuestion de seguridad
    die("no se logro linkear las variables");
}

$vacio = false;

$vacio = (empty($_POST['usuario']) and trim($_POST['usuario']) == "");

if ($vacio) {

    echo "no se ingreso usuario <br><br>";

}

$vacio = (empty($_POST['pass']) and trim($_POST['pass']) == "");

if ($vacio) {

    echo "no se ingreso password <br><br>";
}

if ($vacio) {
    die("error no se ingresaron algunos de los datos solicitados");
}

//echo "se ingreso usuario y password <br><br>";

// ligo las variables

$conexion = mysqli_connect("localhost", "root", "", "clase7") or die("murio<br><br>");
//echo "se establecio la conexion";
//echo "<br><br>";

$usuario = $_POST['usuario'];
$pass    = $_POST['pass'];

//echo $usuario, $pass;

// WHERE usuario.usuario_nombre = "pedro" and usuario.pass = 456484;
$sql =
    'SELECT *
FROM USUARIO

WHERE USUARIO.usuario_nombre = "' . $usuario . '" and  USUARIO.pass = "' . $pass . '" ';

$resultado = mysqli_query($conexion, $sql);

$rowcount = mysqli_num_rows($resultado);

$logueo = true;

if ($rowcount == 1) {
    echo "<h2>";
    echo "logueo exitoso!";
    echo "</h2>";
    $registro   = mysqli_fetch_array($resultado);
    $id_usuario = $registro["usuario_id"];
    //echo "<h2>$id_usuario</h2>";
    //echo "<br><br>";

} else {

    echo "<h2>";
    echo "fallo logueo verifique su contraseña o su usuario";
    echo "</h2>";

    $logueo = false;

}

//echo "cantidad de filas de la consulta para usuario $usuario: $rowcount";

////////////////////////////////////////////////////////////

if ($logueo) {

    echo "<h2> tareas correspondientes al usuario: $usuario</h2>";

    //< ahref = 'editar.php?id=$tarea_id' >
    //<a href="destino.php?variable1=valor1&variable2=valor2 ...&variableN=valorN "> pasar variables</a>

    echo "<h3> <a href='abm_tarea.php?accion=alta&id_usuario=$id_usuario'>Agregar tarea</a> <br></h3>";

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

        //<a href="delete.php?id=22" onclick="return confirm('Are you sure?')">Link</a>

        echo "<td> $descripcion <a href='abm_tarea.php?accion=modificar&tarea_id=" . $tarea_id . "&id_usuario=" . $usuario_id . "&descripcion=" . $descripcion . "'>modificar</a>
        <a href='abm_tarea.php?accion=baja&tarea_id=" . $tarea_id . "&id_usuario=" . $usuario_id . " ' onclick=" . '"return confirm()"' . ">borrar</a></td>";

        /*echo "<td> $descripcion <a href='abm_tarea.php?accion = Modificar'>modificar</a>"
        echo '<a href="abm_tarea.php?accion=baja&tarea_id=$tarea_id" onclick="return confirm(' . 'esta seguro?' . ')">borrar</a></td>';*/

        if ($estado) {
            $estado_tarea = "en proceso";
        } else {
            $estado_tarea = "finalizada";
        }
        echo "<td>$estado_tarea</td>";
        echo "<td>$f_fin</td>";
        echo "</tr>";

    }
/////////////// otro formulario ///////////////////////////

/*
if($logueo and $_GET["accion"] == "agregar"){

echo "<h2>" . "Complete los campos para agregar una tarea" . "</h2>";
}
 */
/////////////////////////////////////////

}

/*
echo "<table border = '1'> \n";
echo "<tr><td>Nombre</td><td>E-Mail</td></tr> \n";
while ($row = mysql_fetch_row($result)){
echo "<tr><td>$row[0]</td><td>$row[1]</td></tr> \n";
}
echo "</table> \n"; */

?>

<!--
<form action="alta.html" method="post">
<button type="submit">registrarme</button>
</form>-->
</body>
</html>


