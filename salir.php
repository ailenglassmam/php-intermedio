<?php
session_start();
session_destroy();
header('Location: index.php');
?>

<!--para serrar la sesión, 1. la inicio; 2. la cierro; 3. Coloco una pagina de destino al momento de cerrar-->