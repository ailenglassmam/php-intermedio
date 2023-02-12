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
        	<h1>Programador Web con PHP y MySQL<br/>Nivel Intermedio</h1>
        </div>
    </header>
    <section id="contenido">
    <h2>Unidad IV - Introducción a PHP</h2>
    <div id="uni4_1">
        <!--inicio de declaración de variables php-->
        <?php
            $bienvenida = 'Bienvenida a la diplomatura';
            $diplomatura = 'Full Stack - PHP y MySql';
            $entidad = 'UTN - FRRE';
        ?>
        <!--fin de declaración de variables php-->
        <h3><?php echo $bienvenida; ?></h3>
        <p>De programación Web <?php echo $diplomatura; ?></p>
        <p>Creada por <?php echo $entidad?></p>
    
    </div>
    <div id="uni4_2">
        <!--inicio de declaración de variables php-->
        <?php
        $evaluacion = 'EVALUACIÓN';
        $integradora = 'INTEGRADORA';
        $curso = 'PHP y MYSQL';
        ?>
        <!--fin de declaración de variables php-->
        <p><?php echo $evaluacion?></p>
        <p><?php echo $integradora?></p>
        <p><?php echo $curso?></p>
    </div>
    <div id="uni4_3">
         <!--inicio de declaración de variables php-->
         <?php
         $boolean = true;
         $nombre_y_apellido = 'Ailén Glassmam';
         $edad = 24;
        ?>
        <!--fin de declaración de variables php-->
        <h3>Tus datos</h3>
        <p><strong>Estado de inscripción:</strong> <?php echo $boolean?></p>
        <p><strong>Datos del estudiante:</strong> <?php echo $nombre_y_apellido?></p>
        <p><strong>Rango etario: </strong><?php echo $edad?></p>
    </div>
    <div id="uni4_4">
        <!--inicio de declaración de variables php-->
        <?php
         $cursos_totales = 10;
         $cursos_realizados = 4;
         $cursos_pendientes = $cursos_totales - $cursos_realizados;
        ?>
        <!--fin de declaración de variables php-->
        <h3>Datos academicos</h3>
        <p><strong>Cursos totales: </strong> <?php echo $cursos_totales;?></p>
        <p> <strong>Cursos realizados: </strong> <?php echo $cursos_realizados ?> </p>
        <p><strong> Cursos pendientes: </strong> <?php echo $cursos_pendientes ?></p>
    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elearning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>