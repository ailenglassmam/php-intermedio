<?php
session_start();
$email_form = $_POST['correo'];
$password_form = $_POST['contrasena'];

if($email_form == 'cliente@gmail.com' && $password_form == 'phpintermedio') {
    $_SESSION['clientes'] = '$email_form';
    header('Location: clientes.php?ok#contenido');
} else {
    header('Location: clientes.php?error#contenido');
}
?>