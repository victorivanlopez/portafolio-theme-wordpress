<?php
function mi_portafolio_menus() {
    register_nav_menus( array(
        'menu-principal' => __('Menu Principal', 'mi-portafolio'), 
        'menu-secundario' => __('Menu Secundario', 'mi-portafolio') 
    ));
};
add_action('init', 'mi_portafolio_menus');