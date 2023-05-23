<?php 
// Loop de WordPress. Mientras haya información va estar corriendo
while( have_posts() ) : the_post(); // have_posts() consulta la base de datos, the_post(); da acceso a la información de cada página. Cada página en WordPress se conocen como posts
    the_title('<h1 class="text-center text-primario">', '</h1>');
    if(has_post_thumbnail()) { // Si hay una imagen destacada
        the_post_thumbnail('full', array('class' => 'imagen-destacada'));
    }
    the_content();
endwhile;