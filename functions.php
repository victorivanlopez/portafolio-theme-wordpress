<?php
require_once get_template_directory() . '/inc/funciones.php';

function mi_portafolio_setup()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
};
add_action('after_setup_theme', 'mi_portafolio_setup');

function mi_portafolio_menus()
{
    register_nav_menus(array(
        'menu-principal' => __('Menu Principal', 'mi-portafolio'),
        'menu-secundario' => __('Menu Secundario', 'mi-portafolio')
    ));
};
add_action('init', 'mi_portafolio_menus');

function mi_portafolio_scripts_styles()
{
    // CSS
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');

    // SCRIPTS
    if (is_front_page()) {
        wp_enqueue_script('typedjs', 'https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js', array(), '2.0.15', true);
    };
    wp_enqueue_script('fontAwesomeJS', 'https://kit.fontawesome.com/3062117176.js', array(), '6.4.0', true);
    wp_enqueue_script('scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), '1.0.0', true);
};
add_action('wp_enqueue_scripts', 'mi_portafolio_scripts_styles');

function mi_portafolio_hero_imagen()
{
    $page = get_page_by_title('Inicio');
    $page_id = $page->ID;

    $id_imagen = get_field('imagen_fondo', $page_id);

    if ($id_imagen) {
        $imagen = wp_get_attachment_image_src($id_imagen, 'full')[0];
        wp_register_style('custom', false);
        wp_enqueue_style('custom');

        $imagen_destacada_css = "
            section.hero {
                background-image: linear-gradient(
                    rgb(0 0 0 / .75),
                    rgb(0 0 0 / .75)
                ), url($imagen);
            }
        ";
        wp_add_inline_style('custom', $imagen_destacada_css);
    };
};
add_action('init', 'mi_portafolio_hero_imagen');
