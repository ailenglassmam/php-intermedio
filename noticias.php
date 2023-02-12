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
    <h2>Noticias - Unidad VI</h2>
    <div id="grillanoticias">
        <?php
        $noticia = array(
            array('titular' => 'Casas Container', 
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus quas aut aperiam et, debitis ut quam nulla consequuntur alias nostrum quo distinctio necessitatibus! Corrupti aperiam quod voluptatem possimus eaque enim?', 
            'imgref' => 'container.jpg'),
            array('titular' => 'Tiny House', 
            'descripcion' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Modi quas recusandae cum exercitationem corporis quod, voluptates dignissimos voluptate iure illo ullam iusto consequatur debitis molestias magnam harum incidunt velit illum.', 
            'imgref' => 'tiny.jpg'),
            array('titular' => 'Construcción en seco', 
            'descripcion' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eveniet minus atque hic, error commodi laborum, nulla nemo facere debitis voluptatem fugiat, laudantium odio sint? Quam excepturi dolorum nesciunt eveniet perspiciatis.', 
            'imgref' => 'cseco.jpg'),
            array('titular' => 'Decoración de verano 2022', 
            'descripcion' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat doloremque eum praesentium commodi, non porro repellat, tempora est cumque tempore accusantium nostrum vel velit eos beatae iure esse, nulla atque!', 
            'imgref' => 'deco.jpg')
        );

        for($i=0; $i < count($noticia); $i++) {    
        ?>
    
        <div class="noticia">
            <div class="imagenes">
                <img src="imagenes/<?php echo $noticia[$i]['imgref'];?>" alt="">
            </div>
            <div class="info">
                <h3><?php echo $noticia[$i]['titular']?></h3>
                <p><?php echo $noticia[$i]['descripcion']?></p>
                <p class="fecha"><small>18 de septiembre de 2022</small></p>
                <button type="button">Ver Más</button>
            </div>
        </div>
        <?php } ?>
    </div>
    </section>

<footer>
<p>Desarrollado por <a href="http://www.elerning-total.com" target="_new">Programador web con PHP y MySQL</a></p></footer>
</section>
</body>
</html>