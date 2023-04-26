<?php
function mi_portafolio_menus() {
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'mi-portafolio'), 
        'menu-secundario' => __('Menu Secundario', 'mi-portafolio') 
    ));
};
add_action('init', 'mi_portafolio_menus');

// Habilitar hojas de estilo y scripts
function mi_portafolio_scripts_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css', array(), '8.0.1');
    wp_enqueue_style('style', get_stylesheet_uri(), array('normalize'), '1.0.0');
};
add_action('wp_enqueue_scripts', 'mi_portafolio_scripts_styles');