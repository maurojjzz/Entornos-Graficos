<?php

session_start();

include("conexion.inc");

$mail = $_POST['mail'];

$query = "SELECT * FROM alumnos WHERE email = '$mail'";

$res = mysqli_query($link, $query);

if (mysqli_num_rows($res) > 0) {

    $fila = mysqli_fetch_assoc($res);

    $_SESSION["nombre"] = $fila["nombre"];

    echo "Alumno encontrado";

} else {

    unset($_SESSION["nombre"]);

    echo "El alumno no existe";
}

?>

<br>
<a href="pagina3.php">Continuar</a>