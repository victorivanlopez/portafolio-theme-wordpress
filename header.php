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

            <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?>

            <div class="redes">

            </div>
        </div>

        <div class="main-content">
    </header>