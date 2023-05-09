<?php get_header(); ?>
        <section id="inicio" class="hero scroll">
            <div class="hero-content">
                <p>Hola. Mi nombre es <?php the_field('nombre'); ?></p>
                <h1>Desarrollador Web <span id="element"></span></h1>
                <div class="hero-action smooth">
                    <a class="boton boton-primaryTransp" href="#portafolio">Ver Portafolio</a>
                </div>
            </div>
            <div class="smooth">
                <a href="#sobre-mi">
                    <i class="fa-sharp fa-solid fa-arrow-down fa-bounce"></i>
                </a>
            </div>
        </section>

        <section id="sobre-mi" class="sobre-mi contenedor seccion scroll">
            <h2>Sobre mi</h2>
            <p class="seccion-descripcion">Conoce un poco más sobre mi, habilidades y mi experiencia</p>

            <div class="sobre-mi-content">
                <div class="resumen">
                    <h3>Hola. Soy <span>Víctor Iván López</span></h3>
                    <?php the_field('resumen'); ?>
                </div>

                <div class="biografia">
                    <h3>Información Adicional</h3>
                    <ul class="biografia-listado">
                        <li>
                            <p><span>Nombre:</span> <?php the_field('nombre_completo') ?></p>
                        </li>
                        <li>
                            <p><span>Puesto:</span> <?php the_field('profesion') ?></p>
                        </li>
                        <li>
                            <p><span>Edad:</span> <?php the_field('edad') ?> Años</p>
                        </li>
                        <li>
                            <p><span>País:</span> <?php the_field('pais') ?></p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="experiencia" class="experiencia-habilidades contenedor seccion scroll">
            <h2>Experiencia y Habilidades</h2>
            <p class="seccion-descripcion">La experiencia y habilidades que he adquirido desarrollando proyectos</p>
             <div class="tabs">
                <button class="actual boton" type="button" data-tab="1">Experiencia</button>
                <button class="boton" type="button" data-tab="2">Habilidades</button>
            </div>

            <div id="tab-1" class="experiencias">
                <?php $experiencia_1 = get_field('experiencia_1');
                if(validarValues($experiencia_1)) :?>
                    <div class="experiencia">
                        <?php      
                            $fecha_inicio = $experiencia_1['inicio'];
                            $fecha_fin = $experiencia_1['fin'];
                            $empresa = $experiencia_1['empresa'];
                            $cargo = $experiencia_1['cargo'];
                            $descripcion = $experiencia_1['descripcion']; 
                        ?>

                        <p class="periodo"><?php echo esc_html($fecha_inicio); ?>-<?php  echo esc_html($fecha_fin); ?></p>
                        <h3 class="nombre"><?php echo esc_html($cargo); ?></h3>
                        <p class="empresa"><?php echo esc_html($empresa); ?></p>
                        <p class="descripcion"><?php echo esc_html($descripcion); ?></p>
                    </div>
                <?php endif; ?>

                <?php $experiencia_2 = get_field('experiencia_2'); 
                if(validarValues($experiencia_2)) :?>
                    <div class="experiencia">
                        <?php      
                            $fecha_inicio = $experiencia_2['inicio'];
                            $fecha_fin = $experiencia_2['fin'];
                            $empresa = $experiencia_2['empresa'];
                            $cargo = $experiencia_2['cargo'];
                            $descripcion = $experiencia_2['descripcion']; 
                        ?>

                        <p class="periodo"><?php echo esc_html($fecha_inicio); ?>-<?php  echo esc_html($fecha_fin); ?></p>
                        <h3 class="nombre"><?php echo esc_html($cargo); ?></h3>
                        <p class="empresa"><?php echo esc_html($empresa); ?></p>
                        <p class="descripcion"><?php echo esc_html($descripcion); ?></p>
                    </div>
                <?php endif; ?>

                <?php $experiencia_3 = get_field('experiencia_3');
                if(validarValues($experiencia_3)) :?>
                    <div class="experiencia">
                        <?php      
                            $fecha_inicio = $experiencia_3['inicio'];
                            $fecha_fin = $experiencia_3['fin'];
                            $empresa = $experiencia_3['empresa'];
                            $cargo = $experiencia_3['cargo'];
                            $descripcion = $experiencia_3['descripcion']; 
                        ?>

                        <p class="periodo"><?php echo esc_html($fecha_inicio); ?>-<?php  echo esc_html($fecha_fin); ?></p>
                        <h3 class="nombre"><?php echo esc_html($cargo); ?></h3>
                        <p class="empresa"><?php echo esc_html($empresa); ?></p>
                        <p class="descripcion"><?php echo esc_html($descripcion); ?></p>
                    </div>
                <?php endif; ?>

                <?php $experiencia_4 = get_field('experiencia_4');
                if(validarValues($experiencia_4)) :?>
                    <div class="experiencia">
                        <?php      
                            $fecha_inicio = $experiencia_4['inicio'];
                            $fecha_fin = $experiencia_4['fin'];
                            $empresa = $experiencia_4['empresa'];
                            $cargo = $experiencia_4['cargo'];
                            $descripcion = $experiencia_4['descripcion']; 
                        ?>

                        <p class="periodo"><?php echo esc_html($fecha_inicio); ?>-<?php  echo esc_html($fecha_fin); ?></p>
                        <h3 class="nombre"><?php echo esc_html($cargo); ?></h3>
                        <p class="empresa"><?php echo esc_html($empresa); ?></p>
                        <p class="descripcion"><?php echo esc_html($descripcion); ?></p>
                    </div>
                <?php endif; ?>
            </div>

            <div id="tab-2" class="habilidades">
            <?php $habilidad_1 = get_field('habilidad_1');
                if(validarValues($habilidad_1)) :?>
                    <div class="habilidad">
                        <?php      
                            $nombre = $habilidad_1['nombre'];
                            $icono = $habilidad_1['icono'];
                        ?>
                        <i class="<?php echo esc_attr($icono); ?>"></i>
                        <h3 class="nombre"><?php echo esc_html($nombre); ?></h3>
                    </div>
                <?php endif; ?>

                <?php $habilidad_2 = get_field('habilidad_2');
                if(validarValues($habilidad_2)) :?>
                    <div class="habilidad">
                        <?php      
                            $nombre = $habilidad_2['nombre'];
                            $icono = $habilidad_2['icono'];
                        ?>
                        <i class="<?php echo esc_attr($icono); ?>"></i>
                        <h3 class="nombre"><?php echo esc_html($nombre); ?></h3>
                    </div>
                <?php endif; ?>

                <?php $habilidad_3 = get_field('habilidad_3');
                if(validarValues($habilidad_3)) :?>
                    <div class="habilidad">
                        <?php      
                            $nombre = $habilidad_3['nombre'];
                            $icono = $habilidad_3['icono'];
                        ?>
                        <i class="<?php echo esc_attr($icono); ?>"></i>
                        <h3 class="nombre"><?php echo esc_html($nombre); ?></h3>
                    </div>
                <?php endif; ?>

                <?php $habilidad_4 = get_field('habilidad_4');
                if(validarValues($habilidad_4)) :?>
                    <div class="habilidad">
                        <?php      
                            $nombre = $habilidad_4['nombre'];
                            $icono = $habilidad_4['icono'];
                        ?>
                        <i class="<?php echo esc_attr($icono); ?>"></i>
                        <h3 class="nombre"><?php echo esc_html($nombre); ?></h3>
                    </div>
                <?php endif; ?>
            </div>
        </section>

        <main id="portafolio" class="portafolio contenedor seccion scroll">
            <h2>Portafolio</h2>
            <p class="seccion-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="listado-cards">
                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proyecto1.png" alt="Proyecto">
                        </a>           
                    </div>

                    <div class="card-content">
                        <h3><a href="#">MuebleWorld</a></h3>
                        <div class="card-botones">
                            <a class="boton" href="#">Más Detalles</a>
                            <a class="boton" href="#">Ver Repositorio</a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-sass.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-js.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-php.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mysql.png" alt="Icono Técnologia">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proyecto2.png" alt="Proyecto">
                        </a>           
                    </div>

                    <div class="card-content">
                        <h3><a href="#">Meeti</a></h3>
                        <div class="card-botones">
                            <a class="boton" href="#">Más Detalles</a>
                            <a class="boton" href="#">Ver Repositorio</a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mongodb.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-express.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-react.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-nodejs.png" alt="Icono Técnologia">
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/proyecto3.png" alt="Proyecto">
                        </a>           
                    </div>

                    <div class="card-content">
                        <h3><a href="#">GuitarLA</a></h3>
                        <div class="card-botones">
                            <a class="boton" href="#">Más Detalles</a>
                            <a class="boton" href="#">Ver Repositorio</a>
                        </div>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-mongodb.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-express.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-react.png" alt="Icono Técnologia">
                            </li>
                            <li class="meta">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon-nodejs.png" alt="Icono Técnologia">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </main>

        <section id="blog" class="blog contenedor seccion scroll">
            <h2>Blog</h2>
            <p class="seccion-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            
            <div class="listado-cards">
                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/entrada1.png" alt="Entrada">
                        </a>           
                    </div>

                    <div class="card-content">
                        <p class="categoria"><a href="#">Desarrollo Web</a></p>
                        <h3><a href="#">Lo que debes saber sobre una tienda virtual</a></h3>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta meta-blog">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>03 de Mayo de 2023</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/entrada2.png" alt="Entrada">
                        </a>           
                    </div>

                    <div class="card-content">
                        <p class="categoria"><a href="#">Desarrollo Web</a></p>
                        <h3><a href="#">6 Ventajas de invertir en una pagina web</a></h3>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta meta-blog">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>05 de Mayo de 2023</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="card-imagen">
                        <a href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/entrada3.png" alt="Entrada">
                        </a>           
                    </div>

                    <div class="card-content">
                        <p class="categoria"><a href="#">Desarrollo Web</a></p>
                        <h3><a href="#">Beneficios al realizar un mantenimiento web</a></h3>
                    </div>

                    <div class="card-footer">
                        <ul class="listado-meta">
                            <li class="meta meta-blog">
                                <i class="fa-solid fa-calendar-days"></i>
                                <p>07 de Mayo de 2023</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>

        <section id="contacto" class="contacto contenedor seccion scroll">
            <h2>Contacto</h2>
            <p class="seccion-descripcion">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

            <div class="contacto-grid">
                <div class="formulario">
                    <h3>Enviame un mensaje</h3>
                    <?php  echo do_shortcode('[contact-form-7 id="37" title="Formulario de contacto 1"]'); ?>
                </div>

                <div class="informacion-medios">
                    <h3>Medios de contácto</h3>
                    <div class="medios">
                        <div class="medio">
                            <div class="icono">
                                <i class="fa-solid fa-mobile-screen"></i>
                            </div>
                            <div class="contenido">
                                <p class="titulo">Telefono</p>
                                <a href="tel:+<?php the_field('telefono'); ?>"><?php the_field('telefono'); ?></a>
                            </div>
                        </div>

                        <div class="medio">
                            <div class="icono">
                                <i class="fa-regular fa-envelope"></i>
                            </div>
                            <div class="contenido">
                                <p class="titulo">Email</p>
                                <a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
                            </div>
                        </div>

                        <div class="medio">
                            <div class="icono">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="contenido">
                                <p class="titulo">Ubicación</p>
                                <p><?php the_field('ubicacion'); ?></p>
                            </div>
                        </div>
                    </div>
                    <h3>Redes Sociales</h3>
                    <nav class="redes-menu">
                        <a href="https://mx.linkedin.com/" target="_blank">
                            <i class="fa-brands fa-linkedin"></i>
                        </a>
                        <a href="https://github.com/" target="_blank">
                            <i class="fa-brands fa-github"></i>
                        </a>
                    </nav>
                </div>
            </div>
        </section>
 <?php get_footer(); ?>