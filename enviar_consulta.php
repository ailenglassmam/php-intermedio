<?php
$nombre_bd = $_POST['nombre_cnt'];
$apellido_bd = $_POST['apellido_cnt'];
$mail_bd = $_POST['mail_cnt'];
$consulta_bd = $_POST['consulta_cnt'];

include('conexion.php');

mysqli_query($datos_bd, "INSERT INTO consultas VALUES (default, '$nombre_bd', '$apellido_bd', '$mail_bd', '$consulta_bd')");

header("Location: contacto.php?consulta_ok");
?>