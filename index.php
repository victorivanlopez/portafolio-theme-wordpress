<?php get_header(); ?>
    <main class="main contenedor seccion">
        <?php
            // Loop
            while( have_posts() ) : the_post();
                the_title();
                the_content();
            endwhile;
        ?>
    </main>

 <?php get_footer(); ?>