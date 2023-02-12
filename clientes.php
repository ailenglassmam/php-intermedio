<?php session_start();?>
<!DOCTYPE html >
<html>
<head>
<meta charset="utf-8" />
<title>Programador web con PHP y MySQL</title>
<link href="estilos.css" rel="stylesheet"/>
</head>

<body>
<section id="contenedor">
	<header>
    	<nav id="botonera_principal">
        	<ul>
            	<li><a href="index.php">Home</a></li><li><a href="catalogo.php">Catálogo</a></li><li><a href="noticias.php">Noticias</a></li><li><a href="clientes.php">Clientes</a></li><li><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </nav>
        <div id="marca">
        	<h1>Programador web con PHP y MySQL</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Clientes - Unidad VII</h2>

    <div id="salida">
        <?php 
    if(isset($_SESSION['clientes'])) { ?>
        <p id="cer_session_button"><a href="salir.php">Cerrar Sesión</a></p> <!--botón para cerrar la sesión iniciada-->
    <?php } else { ?>
    </div>
    

    <div id="formulario">
        <h3>Inicio de sesión</h3>

    <form action="validar_cliente.php" method="POST" id="ini_session">
        <input type="email" name="correo" id="correo" placeholder="E-mail" required>
        <input type="password" name="contrasena" id="contra" placeholder="Contraseña" required>
        <input type="submit" value="Ingresar" id="ini_session_button">
    </form>

    <?php } ?> <!--esto permite que, una vez iniciada la sesión, los campos de ingreso de datos desaparezcan-->
    <?php
    
    if(isset($_GET['error'])){
        echo '<h4 id="alert">Error al ingresar los datos. Por favor, intentelo nuevamente.</h4>';
    }
    ?> <!--condicional para verificar si los datos verificados son erroneos e informar al usuario-->
    </div>

    
    <?php
        if(isset($_SESSION['clientes'])){
             include('contenido_clientes.php');   
        }
    ?> <!--condicional de inicio de sesión-->

    </section>

<footer>
Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>