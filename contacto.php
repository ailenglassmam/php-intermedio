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
    <h2>Contáctenos - Unidad VIII</h2>
    <form id="consulta" action="enviar_consulta.php" method="POST">
        <input type="text" name="nombre_cnt" class="campos" placeholder="Nombre" maxlength="30" required>
        <input type="text" name="apellido_cnt" class="campos" placeholder="Apellido" maxlength="50" required>
        <input type="email" name="mail_cnt" class="campos" name="correo" id="correo_form" placeholder="Tu E-Mail" maxlength="100" required>
        <textarea rows="10" name="consulta_cnt" placeholder="Tu consulta aquí" maxlength="300" required></textarea>
        <button type="submit" id="boton_consulta">Enviar Consulta</button>
    </form>
    <?php 
    if(isset($_GET['consulta_ok'])) {
        echo "<h3>Tu consulta ha sido realizada con éxito.</h3>";
    } ?>
    
    </section>

<footer>
Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></footer>
</section>
</body>
</html>