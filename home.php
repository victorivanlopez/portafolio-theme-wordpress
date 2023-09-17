<?php get_header('secundario'); ?>

<main class="main contenedor seccion blog">
    <h1 class="text-center text-primario">Bienvenido a mi blog</h1>

    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
    );

    $blog = new WP_Query($args);

    if ($blog->have_posts()) : ?>
        <div class="listado-cards">
            <?php while ($blog->have_posts()) :
                $blog->the_post();
                get_template_part('template-parts/blog');
            endwhile; ?>
        </div>
    <?php else : ?>
        <p class="seccion-descripcion">Sin entradas. Por favor agrega una entrada.</p>
    <?php endif;
    wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>