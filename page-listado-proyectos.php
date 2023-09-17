<?php
/*
    Template Name: Listado de Proyectos
*/
get_header('secundario'); ?>

<main class="contenedor seccion portafolio">
    <h1 class="text-center text-primario">Mis Proyectos</h1>

    <?php
    $args = array(
        'post_type' => 'proyecto',
        'posts_per_page' => -1
    );

    $proyectos = new WP_Query($args);

    if ($proyectos->have_posts()) : ?>
        <div class="listado-cards">
            <?php while ($proyectos->have_posts()) :
                $proyectos->the_post();
                get_template_part('template-parts/proyecto');
            endwhile; ?>
        </div>
    <?php else : ?>
        <p class="seccion-descripcion">Sin proyectos. Por favor agrega algún proyecto.</p>
    <?php endif;
    wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>