<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Víctor Iván López - Inicio</title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="navegacion">
            <div class="logo">
                <a href="<?php echo get_home_url(); ?>">
                    <div class="foto">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foto.png" alt="Fotografia">
                    </div>
                </a>
                <p class="nombre">Víctor Iván López</p>
            </div>

            <div class="hamburguer-menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-menu-2" width="44" height="44" viewBox="0 0 24 24" stroke-width="2" stroke="#575655" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                    <line x1="4" y1="6" x2="20" y2="6" />
                    <line x1="4" y1="12" x2="20" y2="12" />
                    <line x1="4" y1="18" x2="20" y2="18" />
                </svg>
            </div>

            <div class="contenedor-menu">
                <?php
                    $args = array(
                        'theme_location' => 'menu-principal',
                        'container' => 'nav',
                        'container_class' => 'menu-principal smooth'
                    );
                    wp_nav_menu($args);
                ?>
            </div>

           
            <nav class="redes-menu">
                <a href="https://mx.linkedin.com/" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="https://github.com/" target="_blank">
                    <i class="fa-brands fa-github"></i>
                </a>
            </nav>
            
        </div>
    </header>
    <div id="menuMovil" class="navegacion-movil">
        <?php
            $args = array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'menu-principal smooth'
            );
            wp_nav_menu($args);
        ?>

        <nav class="redes-menu">
            <a href="https://mx.linkedin.com/" target="_blank">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://github.com/" target="_blank">
                <i class="fa-brands fa-github"></i>
            </a>
        </nav>
    </div>
    
    <div class="main-content">