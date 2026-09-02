<?php
session_start();

extract($_POST);

$_SESSION['usuario'] = $usuario;
$_SESSION['clave'] = $clave;

header("Location: pagina3.php");
exit;
?>